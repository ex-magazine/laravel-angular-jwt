<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Validator;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Log;
use DB;








class JwtAuthController extends Controller
{

    // public function __construct() {
    //     $this->middleware('auth:customer_apijwt', ['except' => ['login', 'register']]);
    // }

    public function bk_authenticate(Request $request)
    {
        // Log::emergency($message);
        // Log::alert($message);
        // Log::critical($message);
        // Log::error($message);
        // Log::warning($message);
        // Log::notice($message);
        // Log::info($message);
        // Log::debug($message);
        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function bk_getAuthenticatedUser()
    {
        try {
          if (!$user = JWTAuth::parseToken()->authenticate()) {
                  return response()->json(['user_not_found'], 404);
          }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }


    public function bk_registerAccount(Request $request)
    {

        Log::info($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(),400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

   
    
 
    
 
    

    /**
     * Get a JWT via given credentials.
    */
    
    public function login_v2(Request $request){
        Log::debug($request);
        
    	$req = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:5', 
        ]);

        if ($req->fails()) {
            return response()->json($req->errors(), 422);
        }

        if (! $token = auth()->attempt($req->validated())) {
            return response()->json(['Auth error' => 'Unauthorized'], 401);
        }

        return $this->generateToken($token);
    } 
    public function login_v1(){
        $credentials = request(['email', 'password']);
        if (!$token = auth()->guard('customer_apijwt')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                	'success' => false,
                	'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
    	return $credentials;
            return response()->json([
                	'success' => false,
                	'message' => 'Could not create token.',
                ], 500);
        }
 	
 		//Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }
    

    /**
     * Sign up.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register_v2(Request $request) {
        $req = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if($req->fails()){
            return response()->json($req->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
                    $req->validated(),
                    ['password' => bcrypt($request->password)]
                ));

        return response()->json([
            'message' => 'User signed up',
            'user' => $user
        ], 201);
    }
    public function register_v1(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }
    public function register(Request $request)
    {
    	//Validate data
        $data = $request->only('name', 'email', 'password');
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

        //Request is valid, create new user
        $user = User::create([
        	'name' => $request->name,
        	'email' => $request->email,
        	'password' => bcrypt($request->password)
        ]);

        //User created, return success response
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ], Response::HTTP_OK);
    }

    /**
     * Sign out
    */
    public function signout_v2() {
        auth()->logout();
        return response()->json(['message' => 'User loged out']);
    }
    public function signout_v1() {
        auth('customer_apijwt')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    public function signout(Request $request)
    {
        //valid credential
        $validator = Validator::make($request->only('token'), [
            'token' => 'required'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()], 200);
        }

		//Request is validated, do logout        
        try {
            JWTAuth::invalidate($request->token);
 
            return response()->json([
                'success' => true,
                'message' => 'User has been logged out'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, user cannot be logged out'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Token refresh
    */
    public function refresh_v2() {
        return $this->generateToken(auth()->refresh());
    }
    public function refresh() {
        return $this->respondWithToken(auth('customer_apijwt')->refresh());
    } 

    /**
     * Change PassWord
    */
    public function changePassWord(Request $request) {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->update(
                    ['password' => bcrypt($request->new_password)]
                );

        return response()->json([
            'message' => 'User successfully changed password',
            'user' => $user,
        ], 201);
    }

    /**
     * User
    */
    public function user_v2() {
        return response()->json(auth()->user());
    }
    public function user_v1() { 
        return response()->json(auth('customer_apijwt')->user());
    }
    public function user(Request $request) {
        $this->validate($request, [
            'token' => 'required'
        ]);
 
        $user = JWTAuth::authenticate($request->token);
 
        return response()->json(['user' => $user]);
    }

    /**
     * Generate token
    */
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('customer_apijwt')->factory()->getTTL() * 60
            
        ]);
    }
    protected function generateToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }






    public $loginAfterSignUp = true; 
    
    public function reqForgotPassword(Request $request){
        if(!$this->validEmail($request->email)) {
            return response()->json([
                'message' => 'Email not found.'
            ], Response::HTTP_NOT_FOUND);
        } else {
            $this->sendEmail($request->email);
            return response()->json([
                'message' => 'Password reset mail has been sent.'
            ], Response::HTTP_OK);
        }
    }
    

    public function login_v5(Request $request)
    {
        $credentials = $request->only("email", "password");
        $token = null;

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                "status" => false,
                "message" => "Unauthorized"
            ]);
        }

        return response()->json([
            "status" => true,
            "token" => $token
        ]);
    }

    public function register_v5(Request $request)
    {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:6|max:10"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            "status" => true,
            "user" => $user
        ]);
    }

    public function logout_v5(Request $request)
    {
        $this->validate($request, [
            "token" => "required"
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                "status" => true,
                "message" => "User logged out successfully"
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                "status" => false,
                "message" => "Ops, the user can not be logged out"
            ]);
        }
    }

    public function sendEmail($email){
        $token = $this->createToken($email);
        Mail::to($email)->send(new SendMail($token));
    }

    public function validEmail($email) {
       return !!User::where('email', $email)->first();
    }

    public function createToken($email){
      $isToken = DB::table('password_resets')->where('email', $email)->first();

      if($isToken) {
        return $isToken->token;
      }

      $token = Str::random(80);;
      $this->saveToken($token, $email);
      return $token;
    }

    public function saveToken($token, $email){
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()            
        ]);
    }

  
}

/*


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RequestHelper;
use Symfony\Component\HttpFoundation\Response;


class UpdatePwdController extends Controller
{
    public function updatePassword(RequestHelper $request){
        return $this->validateToken($request)->count() > 0 ? $this->changePassword($request) : $this->noToken();
    }

    private function validateToken($request){
        return DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->passwordToken
        ]);
    } 

    private function noToken() {
        return response()->json([
          'error' => 'Email or token does not exist.'
        ],Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    private function changePassword($request) {
        $user = User::whereEmail($request->email)->first();
        $user->update([
          'password'=>bcrypt($request->password)
        ]);
        $this->validateToken($request)->delete();
        return response()->json([
          'data' => 'Password changed successfully.'
        ],Response::HTTP_CREATED);
    }  
}
 



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class ResetPwdReqController extends Controller
{
    public $loginAfterSignUp = true;
    
    public function reqForgotPassword(Request $request){
        if(!$this->validEmail($request->email)) {
            return response()->json([
                'message' => 'Email not found.'
            ], Response::HTTP_NOT_FOUND);
        } else {
            $this->sendEmail($request->email);
            return response()->json([
                'message' => 'Password reset mail has been sent.'
            ], Response::HTTP_OK);
        }
    }
     

    public function login(Request $request)
    {
        $credentials = $request->only("email", "password");
        $token = null;

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                "status" => false,
                "message" => "Unauthorized"
            ]);
        }

        return response()->json([
            "status" => true,
            "token" => $token
        ]);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "password" => "required|string|min:6|max:10"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            "status" => true,
            "user" => $user
        ]);
    }

    public function logout(Request $request)
    {
        $this->validate($request, [
            "token" => "required"
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                "status" => true,
                "message" => "User logged out successfully"
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                "status" => false,
                "message" => "Ops, the user can not be logged out"
            ]);
        }
    }

    public function sendEmail($email){
        $token = $this->createToken($email);
        Mail::to($email)->send(new SendMail($token));
    }

    public function validEmail($email) {
       return !!User::where('email', $email)->first();
    }

    public function createToken($email){
      $isToken = DB::table('password_resets')->where('email', $email)->first();

      if($isToken) {
        return $isToken->token;
      }

      $token = Str::random(80);;
      $this->saveToken($token, $email);
      return $token;
    }

    public function saveToken($token, $email){
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()            
        ]);
    }
}
*/
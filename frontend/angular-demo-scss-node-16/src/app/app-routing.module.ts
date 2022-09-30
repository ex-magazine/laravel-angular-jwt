import {NgModule} from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './auth/components/login/login.component';
import { RegisterComponent } from './auth/components/register/register.component';
import { ProfileComponent } from './auth/components/profile/profile.component';

const routes: Routes = [
	{ path: '', redirectTo: '/signin', pathMatch: 'full' },
	{ path: 'signin', component: LoginComponent },
	{ path: 'signup', component: RegisterComponent },
	{ path: 'user-profile', component: ProfileComponent }
];

@NgModule({
	imports: [RouterModule.forRoot(routes)],
	exports: [RouterModule]
})
export class AppRoutingModule { }
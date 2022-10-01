<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(LanguagesSeeder::class);
        // $this->call(UsersSeeder::class);
        // $this->call(PermissionsSeeder::class);
        // $this->call(WebmasterSettingsSeeder::class);
        // $this->call(WebmasterBannersSeeder::class);
        // $this->call(WebmasterSectionsSeeder::class);
        // $this->call(SettingsSeeder::class);
        // $this->call(CountriesSeeder::class);
        // $this->call(ContactsGroupsSeeder::class);
        // $this->call(MenusSeeder::class);
        // $this->call(BannersSeeder::class);
        // $this->call(TopicsSeeder::class);
        // $this->call(WebmailGroupsSeeder::class);

         // $this->call(UsersTableSeeder::class);
        //  $this->call(UserSeeder::class);
        //  $this->call(AdminSettingSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AdminNotificationsTableSeeder::class);
        $this->call(AdminPasswordResetsTableSeeder::class);
        $this->call(AdminSettingsTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(AttributeProductTableSeeder::class);
        $this->call(AttributeValuesTableSeeder::class);
        $this->call(BalancesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogCommentsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(CategoryShopTableSeeder::class);
        $this->call(CommissionLogsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(DepositsTableSeeder::class);
        $this->call(EmailLogsTableSeeder::class);
        $this->call(EmailSmsTemplatesTableSeeder::class);
        $this->call(ExtensionsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FrontendsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(GalleryCategoriesTableSeeder::class);
        $this->call(GatewaysTableSeeder::class);
        $this->call(GatewayCurrenciesTableSeeder::class);
        $this->call(GeneralSettingsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LotteriesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderProductTableSeeder::class);
        $this->call(OrderStatusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PhasesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(PortfolioCategoriesTableSeeder::class);
        $this->call(PricingFeaturesTableSeeder::class);
        $this->call(PricingPlansTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductTagTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ShippingClassesTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(SupportAttachmentsTableSeeder::class);
        $this->call(SupportMessagesTableSeeder::class);
        $this->call(SupportTicketsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TaxClassesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(UserBlogsTableSeeder::class);
        $this->call(UserLoginsTableSeeder::class);
        $this->call(UserProfilesTableSeeder::class);
        $this->call(UserVerificationCodesTableSeeder::class);
        $this->call(VariationOptionsTableSeeder::class);
        $this->call(WinnersTableSeeder::class);
        $this->call(WinBonusesTableSeeder::class);
        $this->call(WithdrawalsTableSeeder::class);
        $this->call(WithdrawsTableSeeder::class);
        $this->call(WithdrawMethodsTableSeeder::class);
    }
}

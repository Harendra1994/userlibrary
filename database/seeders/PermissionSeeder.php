
use Illuminate\Database\Seeder;
use YourVendor\UserRolePermission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
    }
}

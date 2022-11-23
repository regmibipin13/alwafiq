<?php

namespace Database\Seeders;

use App\Base\Constants\Auth\Permission as PermissionSlug;
use App\Base\Constants\Auth\Role as RoleSlug;
use App\Models\Access\Permission;
use App\Models\Access\Role;
use Illuminate\Database\Seeder;
use DB;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
      * List of all the permissions to be created.
      *
      * @var array
      */

    protected $permissions = [

         //Dashboard and Configurations

       PermissionSlug::ACCESS_DASHBOARD => [
            'name' => 'Access-Dashboard',
            'description' => 'Access Dashboard',
            'main_menu' => 'dashboard',
            'sub_menu' => null,
            'sort' => 1,
            'main_link' => 'dashboard',
            'icon' => 'fa fa-tachometer'
        ],
        PermissionSlug::GET_ALL_ROLES => [
            'name' => 'Get-All-Roles',
            'description' => 'Get-All-Roles',
            'main_menu'=>'settings',
            'sub_menu'=>'roles',
            'sub_link'=>'roles',
        ],
        PermissionSlug::EDIT_ROLES => [
            'name' => 'edit-roles',
            'description' => 'Edit all roles',
            'main_menu'=>'settings',
            'sub_menu'=>'roles',
            'sub_link'=>'roles',
            ],
        PermissionSlug::CREATE_ROLES => [
            'name' => 'create-roles',
            'description' => 'Create Roles',
            'main_menu' => 'settings',
            'sub_menu' => null,
            'sort' => 12,
            'icon' => 'fa fa-cogs'
        ],
        PermissionSlug::GET_ALL_PERMISSIONS => [
            'name' => 'Get-All-Permissions',
            'description' => 'Get all permissions',
            'main_menu'=>'settings',
            'sub_menu'=>'roles',
        ],

        PermissionSlug::SETTINGS => [
            'name' => 'view-all-settings',
            'description' => 'View All Settings',
            'main_menu' => 'settings',
            'sub_menu' => null,
            'sort' => 12,
            'icon' => 'fa fa-cogs'
        ],
        PermissionSlug::VIEW_SYSTEM_SETINGS => [
            'name' => 'view-system-settings',
            'description' => 'view-system-settings',
            'main_menu' => 'settings',
            'sub_menu' => null,
            'sort' => 12,
            'icon' => 'fa fa-cogs'
        ],
        PermissionSlug::VIEW_TRANSLATIONS => [
            'name' => 'view-translations',
            'description' => 'View Translations',
            'main_menu' => 'settings',
            'sub_menu' => null,
            'sort' => 12,
            'icon' => 'fa fa-cogs'
        ],

/* Master */
        PermissionSlug::MASTER => [
            'name' => 'master-data',
            'description' => 'View All Master Data',
            'main_menu' => 'master',
            'sub_menu' => null,
            'sort' => 17,
            'icon' => 'fa fa-code-fork'
        ],
    // car make 
        PermissionSlug::MANAGE_CARMAKE => [
            'name' => 'manage-carmake',
            'description' => 'List carmake',
            'main_menu'=>'master',
            'sub_menu'=>'carmake',
            'sub_link'=>'carmake',
        ],
        PermissionSlug::ADD_CARMAKE => [
            'name' => 'add-carmake',
            'description' => 'Add carmake',
            'main_menu'=>'master',
            'sub_menu'=>'carmake',
            'sub_link'=>'carmake',
        ],
        PermissionSlug::EDIT_CARMAKE => [
            'name' => 'edit-carmake',
            'description' => 'Edit carmake',
            'main_menu'=>'master',
            'sub_menu'=>'carmake',
            'sub_link'=>'carmake',
        ],
        PermissionSlug::DELETE_CARMAKE => [
            'name' => 'delete-carmake',
            'description' => 'Delete carmake',
            'main_menu'=>'master',
            'sub_menu'=>'carmake',
            'sub_link'=>'carmake',
        ],
        PermissionSlug::TOGGLE_CARMAKE => [
            'name' => 'toggle-carmake',
            'description' => 'Toggle carmake',
            'main_menu'=>'master',
            'sub_menu'=>'carmake',
            'sub_link'=>'carmake',
        ],
   //  car model

        PermissionSlug::MANAGE_CARMODEL => [
            'name' => 'manage-carmodel',
            'description' => 'List carmodel',
            'main_menu'=>'master',
            'sub_menu'=>'carmodel',
            'sub_link'=>'carmodel',
        ],
        PermissionSlug::ADD_CARMODEL => [
            'name' => 'add-carmodel',
            'description' => 'Add carmodel',
            'main_menu'=>'master',
            'sub_menu'=>'carmodel',
            'sub_link'=>'carmodel',
        ],
        PermissionSlug::EDIT_CARMODEL => [
            'name' => 'edit-carmodel',
            'description' => 'Edit carmodel',
            'main_menu'=>'master',
            'sub_menu'=>'carmodel',
            'sub_link'=>'carmodel',
        ],
        PermissionSlug::DELETE_CARMODEL => [
            'name' => 'delete-carmodel',
            'description' => 'Delete carmodel',
            'main_menu'=>'master',
            'sub_menu'=>'carmodel',
            'sub_link'=>'carmodel',
        ],
        PermissionSlug::TOGGLE_CARMODEL => [
            'name' => 'toggle-carmodel',
            'description' => 'Toggle carmodel',
            'main_menu'=>'master',
            'sub_menu'=>'carmodel',
            'sub_link'=>'carmodel',
        ],


   // Manage Driver Needed Doc
        PermissionSlug::MANAGE_DRIVER_NEEDED_DOC => [
            'name' => 'manage-driver-needed-document',
            'description' => 'List driver needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'needed_doc',
            'sub_link'=>'needed_doc',
        ],     
        PermissionSlug::ADD_DRIVER_NEEEDED_DOC => [
            'name' => 'add-driver-needed-document',
            'description' => 'Add driver needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'needed_doc',
            'sub_link'=>'needed_doc',
        ],         
        PermissionSlug::EDIT_DRIVER_NEEEDED_DOC => [
            'name' => 'edit-driver-needed-document',
            'description' => 'Edit driver needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'needed_doc',
            'sub_link'=>'needed_doc',
        ],         
        PermissionSlug::DELETE_DRIVER_NEEEDED_DOC => [
            'name' => 'delete-driver-needed-document',
            'description' => 'Delete driver needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'needed_doc',
            'sub_link'=>'needed_doc',
        ], 
        PermissionSlug::TOGGLE_DRIVER_NEEEDED_DOC => [
            'name' => 'toggle-driver-needed-documentt',
            'description' => 'toggle-driver-needed-document',
            'main_menu'=>'master',
            'sub_menu'=>'needed_doc',
            'sub_link'=>'needed_doc',
        ], 
     //Manage Fleet Needed Doc
        PermissionSlug::MANAGE_FLEET_NEEDED_DOC => [
            'name' => 'manage-fleet_needed-document',
            'description' => 'List fleet needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'fleet_needed_doc',
            'sub_link'=>'fleet_needed_doc',
        ],
        PermissionSlug::ADD_FLEET_NEEEDED_DOC => [
            'name' => 'add-fleet-needed-document',
            'description' => 'Add fleet needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'fleet_needed_doc',
            'sub_link'=>'fleet_needed_doc',
        ],         
        PermissionSlug::EDIT_FLEET_NEEEDED_DOC => [
            'name' => 'edit-fleet-needed-document',
            'description' => 'Edit fleet needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'fleet_needed_doc',
            'sub_link'=>'fleet_needed_doc',
        ],         
        PermissionSlug::DELETE_FLEET_NEEEDED_DOC => [
            'name' => 'delete-fleet-needed-document',
            'description' => 'Delete fleet needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'fleet_needed_doc',
            'sub_link'=>'fleet_needed_doc',
        ], 
        PermissionSlug::TOGGLE_FLEET_NEEEDED_DOC => [
            'name' => 'toggle-fleet-needed-documentt',
            'description' => 'toggle-fleet-needed-document',
            'main_menu'=>'master',
            'sub_menu'=>'fleet_needed_doc',
            'sub_link'=>'fleet_needed_doc',
        ], 
        // Manage Owner Needed Doc
        PermissionSlug::MANAGE_OWNER_NEEDED_DOC => [
            'name' => 'manage-owner-needed-document',
            'description' => 'List owner needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'owner_needed_doc',
            'sub_link'=>'owner_needed_doc',
        ],
        PermissionSlug::ADD_OWNER_NEEEDED_DOC => [
            'name' => 'add-owner-needed-document',
            'description' => 'Add Owner needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'owner_needed_doc',
            'sub_link'=>'owner_needed_doc',
        ],         
        PermissionSlug::EDIT_OWNER_NEEEDED_DOC => [
            'name' => 'edit-owner-needed-document',
            'description' => 'Edit Owner needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'owner_needed_doc',
            'sub_link'=>'owner_needed_doc',
        ],         
        PermissionSlug::DELETE_OWNER_NEEEDED_DOC => [
            'name' => 'delete-owner-needed-document',
            'description' => 'Delete Owner needed documents',
            'main_menu'=>'master',
            'sub_menu'=>'owner_needed_doc',
            'sub_link'=>'owner_needed_doc',
        ], 
        PermissionSlug::TOGGLE_OWNER_NEEEDED_DOC => [
            'name' => 'toggle-owner-needed-document',
            'description' => 'toggle Owner needed document',
            'main_menu'=>'master',
            'sub_menu'=>'owner_needed_doc',
            'sub_link'=>'owner_needed_doc',
        ],     
        //Manage Package Type
        PermissionSlug::PACKAGE_TYPE => [
            'name' => 'manage-package-type',
            'description' => 'List Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'package-type',
            'sub_link'=>'package-type',
        ],
        PermissionSlug::ADD_PACKAGE_TYPE => [
            'name' => 'add-package-type',
            'description' => 'Add Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'package-type',
            'sub_link'=>'package-type',
        ],         
        PermissionSlug::EDIT_PACKAGE_TYPE => [
            'name' => 'edit-package-type',
            'description' => 'Edit Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'package-type',
            'sub_link'=>'package-type',
        ],         
        PermissionSlug::DELETE_PACKAGE_TYPE => [
            'name' => 'delete-package-type',
            'description' => 'Delete Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'package-type',
            'sub_link'=>'package-type',
        ], 
        PermissionSlug::TOGGLE_PACKAGE_TYPE => [
            'name' => 'toggle-package-type',
            'description' => 'toggle Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'package-type',
            'sub_link'=>'package-type',
        ],  
        //Manage Goods Type
        PermissionSlug::GOODS_TYPES => [
            'name' => 'manage-goods-types',
            'description' => 'List Package Type',
            'main_menu'=>'master',
            'sub_menu'=>'goods_types',
            'sub_link'=>'goods_types',
        ],
        PermissionSlug::ADD_GOODS_TYPES => [
            'name' => 'add-goods-typess',
            'description' => 'Add Goods Types',
            'main_menu'=>'master',
            'sub_menu'=>'goods_types',
            'sub_link'=>'goods_types',
        ],         
        PermissionSlug::EDIT_GOODS_TYPES => [
            'name' => 'edit-goods-types',
            'description' => 'Edit Goods Types',
            'main_menu'=>'master',
            'sub_menu'=>'goods_types',
            'sub_link'=>'goods_types',
        ],         
        PermissionSlug::DELETE_GOODS_TYPES => [
            'name' => 'delete-goods-types',
            'description' => 'Delete Goods Types',
            'main_menu'=>'master',
            'sub_menu'=>'goods_types',
            'sub_link'=>'goods_types',
        ], 
        PermissionSlug::TOGGLE_GOODS_TYPES => [
            'name' => 'toggle-goods-types',
            'description' => 'toggle Goods Types',
            'main_menu'=>'master',
            'sub_menu'=>'goods_types',
            'sub_link'=>'goods_types',
        ],  
      /* service-Location */
        PermissionSlug::SERVICE_LOCATION => [
            'name' => 'Service_Location',
            'description' => 'Available location for app',
            'main_menu'=>'service_location',
            'sub_menu'=> null,
            'main_link'=>'service_location',
            'sort' => 2,
            'icon' => 'fa fa-map-marker'
        ],
        PermissionSlug::ADD_SERVICE_LOCATION => [
            'name' => 'Add_Service_Location',
            'description' => 'Add location for app',
            'main_menu'=>'service_location',
            'sub_menu'=> null,
            'main_link'=>'service_location',
            'sort' => 2,
            'icon' => 'fa fa-map-marker'
        ],       
        PermissionSlug::EDIT_SERVICE_LOCATION => [
            'name' => 'Edit_Service_Location',
            'description' => 'Edit location for app',
            'main_menu'=>'service_location',
            'sub_menu'=> null,
            'main_link'=>'service_location',
            'sort' => 2,
            'icon' => 'fa fa-map-marker'
        ],       
        PermissionSlug::DELETE_SERVICE_LOCATION => [
            'name' => 'Delete_Service_Location',
            'description' => 'Delete location for app',
            'main_menu'=>'service_location',
            'sub_menu'=> null,
            'main_link'=>'service_location',
            'sort' => 2,
            'icon' => 'fa fa-map-marker'
        ],        
        PermissionSlug::TOGGLE_SERVICE_LOCATION => [
            'name' => 'Toggle_Service_Location',
            'description' => 'toggle location for app',
            'main_menu'=>'service_location',
            'sub_menu'=> null,
            'main_link'=>'service_location',
            'sort' => 2,
            'icon' => 'fa fa-map-marker'
        ],
    /* manage-owner */
         PermissionSlug::MANAGE_OWNER => [
            'name' => 'manage_owners',
            'description' => 'Owner list and create',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner',
            'sort' => 3,
            'icon' => 'fa fa-briefcase',
            'main_link' => 'owners',
        ],
        PermissionSlug::CREATE_OWNER => [
            'name' => 'add-owner',
            'description' => 'Add Owner',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner'
        ],
        PermissionSlug::EDIT_OWNER => [
            'name' => 'edit-owner',
            'description' => 'Edit Owner',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner'
        ],
        PermissionSlug::DELETE_OWNER => [
            'name' => 'delete-owner',
            'description' => 'Delete Owner',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner'
        ],
        PermissionSlug::TOGGLE_OWNER_STATUS => [
            'name' => 'toggle-owner-status',
            'description' => 'Toggle Owner Status',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner'
        ],
        PermissionSlug::VIEW_OWNER_DOCUMENT => [
            'name' => 'view-owner-document',
            'description' => 'View Owner Document',
            'main_menu' => 'manage_owners',
            'sub_menu' => 'owner'
        ],

  /* Manage Fleet */
         PermissionSlug::MANAGE_FLEET => [
            'name' => 'manage-fleet',
            'description' => 'Manage fleets add edit delete',
            'main_menu' => 'manage_fleet',
            'sub_menu' => null,
            'sort' => 18,
            'icon' => 'fa fa-taxi',
            'main_link' => 'fleets',
        ],
        PermissionSlug::CREATE_FLEET => [
            'name' => 'add-fleet',
            'description' => 'Create new fleet',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
        PermissionSlug::EDIT_FLEET => [
            'name' => 'edit-fleet',
            'description' => 'Edit fleet',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
        PermissionSlug::DELETE_FLEET => [
            'name' => 'delete-fleet',
            'description' => 'Delete fleet',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
        PermissionSlug::FLEET_TOGGLE_STATUS => [
            'name' => 'toggle-fleet-status',
            'description' => 'Change status of fleet',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
        PermissionSlug::FLEET_APPROVE_STATUS => [
            'name' => 'toggle-fleet-approval',
            'description' => 'Change Approve status of fleet',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
        PermissionSlug::VIEW_FLEET_DOCUMENT => [
            'name' => 'view-fleet-document',
            'description' => 'View Fleet Document',
            'main_menu' => 'manage_fleet',
            'sub_menu' => 'manage_fleet'
        ],
/* Admin */
        PermissionSlug::ADMIN => [
            'name' => 'Admin',
            'description' => 'Admin User List',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ],    
        PermissionSlug::CREATE_ADMIN => [
            'name' => 'add-admin',
            'description' => 'create admin',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ],        
        PermissionSlug::EDIT_ADMIN => [
            'name' => 'edit-admin',
            'description' => 'Edit Admin',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ],       
        PermissionSlug::DELETE_ADMIN => [
            'name' => 'delete-admin',
            'description' => 'Delete Admin',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ],
        PermissionSlug::TOGGLE_ADMIN => [
            'name' => 'toggle-admin-status',
            'description' => 'toggle status admin',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ], 
/* Request */
         PermissionSlug::VIEW_REQUEST => [
            'name' => 'view-requests',
            'description' => 'View Request Details',
            'main_menu'=>'request',
            'sub_menu'=> 'request',
            'main_link'=>'requests',
            'sort' => 5,
            'icon' => 'fa fa-list'
        ],    
        PermissionSlug::RIDES => [
            'name' => 'view-rides',
            'description' => 'View Rides',
            'main_menu'=>'request',
            'sub_menu'=> 'request',
            'main_link'=>'requests',
            'sort' => 5,
            'icon' => 'fa fa-list'
        ],  
        PermissionSlug::SCHEDULED_RIDES => [
            'name' => 'scheduled-rides',
            'description' => 'View scheduled Rides',
            'main_menu'=>'request',
            'sub_menu'=> 'scheduled-rides',
            'main_link'=>'requests',
            'sub_link' =>'scheduled-rides',
            'sort' => 5,
            'icon' => 'fa fa-list'
        ],  
        PermissionSlug::CANCELLATION_RIDES => [
            'name' => 'cancellation-rides',
            'description' => 'View cancellation Rides',
            'main_menu'=>'request',
            'sub_menu'=> 'cancellation-rides',
            'main_link'=>'requests',
            'sub_link' =>'cancellation-rides',
            'sort' => 5,
            'icon' => 'fa fa-list'
        ],  

/* Vehicle Type */

        PermissionSlug::VIEW_TYPES => [
            'name' => 'view-vehicle-types',
            'description' => 'Get all types',
            'main_menu'=>'vehicle-type',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'types',

        ],   
        PermissionSlug::ADD_TYPES => [
            'name' => 'add-vehicle-types',
            'description' => 'Get all types',
            'main_menu'=>'vehicle-type',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'types',

        ],  
        PermissionSlug::EDIT_TYPES => [
            'name' => 'edit-vehicle-types',
            'description' => 'Get all types',
            'main_menu'=>'vehicle-type',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'types',

        ],  
        PermissionSlug::DELETE_TYPES => [
            'name' => 'delete-vehicle-types',
            'description' => 'Get all types',
            'main_menu'=>'vehicle-type',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'types',

        ],  
        PermissionSlug::TOGGLE_TYPES => [
            'name' => 'toggle-vehicle-types',
            'description' => 'Get all types',
            'main_menu'=>'vehicle-type',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'types',
        ],  
 /* Zone */       
        PermissionSlug::MAP_MENU => [
            'name' => 'map',
            'description' => 'View all map related menus',
            'main_menu' => 'map',
            'sub_menu' => null,
            'sort' => 8,
            'icon' => 'fa fa-map'
        ],
        PermissionSlug::VIEW_ZONE_MAP => [
            'name' => 'view-zone-map',
            'description' => 'map-view',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::VIEW_ZONE => [
            'name' => 'Get-All-zones',
            'description' => 'Get all zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::ADD_ZONE => [
            'name' => 'add-zones',
            'description' => 'Add zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::EDIT_ZONE => [
            'name' => 'edit-zones',
            'description' => 'Edit zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::DELETE_ZONE => [
            'name' => 'delete-zones',
            'description' => 'Get all zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::TOGGLE_ZONE => [
            'name' => 'toggle-status-zones',
            'description' => 'Toggle Status Zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
        PermissionSlug::SURGE_ZONE => [
            'name' => 'surge-zones',
            'description' => 'Surge zones',
            'main_menu'=>'map',
            'sub_menu'=>'zone',
            'sub_link'=>'zone',
        ],
         PermissionSlug::LIST_AIRPORTS => [
            'name' => 'Get-All-Airports',
            'description' => 'Get all airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
        PermissionSlug::ADD_AIRPORTS => [
            'name' => 'Add-Airports',
            'description' => 'Add airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
        PermissionSlug::EDIT_AIRPORTS => [
            'name' => 'Edit-Airports',
            'description' => 'Edit airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
        PermissionSlug::DELETE_AIRPORTS => [
            'name' => 'Delete-Airports',
            'description' => 'Delete airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
        PermissionSlug::MAP_VIEW_AIRPORTS => [
            'name' => 'Map-view-Airports',
            'description' => 'Map-view-Airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
        PermissionSlug::TOGGLE_AIRPORTS => [
            'name' => 'Toggle-Airports',
            'description' => 'Toggle-Airports',
            'main_menu'=>'map',
            'sub_menu'=>'airport',
            'sub_link'=>'aiports',
        ],
/* Vehicle Type */

        PermissionSlug::VEHICLE_FARE => [
            'name' => 'vehicle-fare',
            'description' => 'list-vehicle_fare',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',

        ],   
        PermissionSlug::ADD_PRICE => [
            'name' => 'add-price',
            'description' => 'add price',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',

        ],  
        PermissionSlug::EDIT_PRICE => [
            'name' => 'edit-price',
            'description' => 'edit price',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',

        ],  
        PermissionSlug::DELETE_PRICE => [
            'name' => 'delete-price',
            'description' => 'delete price',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',

        ],  
        PermissionSlug::TOGGLE_PRICE => [
            'name' => 'toggle-price',
            'description' => 'toggle price',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ], 
        PermissionSlug::DEFAULT_VEHICLE_TYPE => [
            'name' => 'default-vehicle-type',
            'description' => 'default-vehicle-type',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],       
        PermissionSlug::ASSIGN_RENTAL_PACKAGE => [
            'name' => 'assign-rental-package',
            'description' => 'assign-rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],    
        PermissionSlug::RENTAL_PACKAGE => [
            'name' => 'rental-package',
            'description' => 'rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],   
        PermissionSlug::ADD_RENTAL_PACKAGE => [
            'name' => 'add-rental-package',
            'description' => 'add-rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],  
        PermissionSlug::EDIT_RENTAL_PACKAGE => [
            'name' => 'edit-rental-package',
            'description' => 'edit-rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],   
        PermissionSlug::DELETE_RENTAL_PACKAGE => [
            'name' => 'delete-rental-package',
            'description' => 'delete-rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],  
        PermissionSlug::TOGGLE_RENTAL_PACKAGE => [
            'name' => 'toggle-rental-package',
            'description' => 'toggle-rental-package',
            'main_menu'=>'vehicle-fare',
            'sub_menu'=>null,
            'sub_link'=>null,
            'main_link'=>'vehicle_fare',
        ],


        PermissionSlug::VIEW_COMPANIES => [
            'name' => 'View-Companies',
            'description' => 'View Companies',
            'main_menu' => 'company',
            'sub_menu' => null,
            'sort' => 7,
            'main_link' => 'company',
            'icon' => 'fa fa-building'
        ],
            PermissionSlug::DRIVERS_MENU => [
            'name' => 'drivers',
            'description' => 'View all driver related menus',
            'main_menu' => 'drivers',
            'sub_menu' => null,
            'sort' => 4,
            'icon' => 'fa fa-users'
        ],

        PermissionSlug::VIEW_DRIVERS => [
            'name' => 'Get-All-Drivers',
            'description' => 'Get all drivers',
            'main_menu'=>'drivers',
            'sub_menu'=>'driver_details',
            'sub_link'=>'drivers',
        ],
        PermissionSlug::USER_MENU => [
            'name' => 'users',
            'description' => 'View all user related menus',
            'main_menu' => 'users',
            'sub_menu' => null,
            'sort' => 5,
            'icon' => 'fa fa-user'
        ],
        PermissionSlug::VIEW_USERS => [
            'name' => 'Get-All-Users',
            'description' => 'Get all Users',
            'main_menu'=>'users',
            'sub_menu'=>'user_details',
            'sub_link'=>'users',
        ],
        PermissionSlug::USER_SOS => [
            'name' => 'User-Sos',
            'description' => 'Emergency Numbers',
            'main_menu'=>'emergency_number',
            'sub_menu'=> null,
            'main_link'=>'sos',
            'sort' => 6,
            'icon' => 'fa fa-heartbeat'
        ],
        PermissionSlug::ADMIN => [
            'name' => 'Admin',
            'description' => 'Admin User List',
            'main_menu'=>'admin',
            'sub_menu'=> null,
            'main_link'=>'admins',
            'sort' => 3,
            'icon' => 'fa fa-user-circle-o'
        ],
        PermissionSlug::DISPATCH_REQUEST => [
            'name' => 'Dispatch-Request',
            'description' => 'Dispatch manual requests from admin panel',
            'main_menu'=>'dispatch_request',
            'sub_menu'=> null,
            'main_link'=>'dispatch',
            'sort' => 3,
            'icon' => 'fa fa-tripadvisor'
        ],
        PermissionSlug::UPLOAD_BUILDS => [
            'name' => 'Upload-Mobile-Builds',
            'description' => 'Upload mobile builds',
            'main_menu'=>'builds',
            'sub_menu'=> 'upload_builds',
            'main_link'=>'/builds/create',
            'sort' => 3,
            'icon' => 'fa fa-tripadvisor'
        ],
        PermissionSlug::VIEW_BUILDS => [
            'name' => 'View-Mobile-Builds',
            'description' => 'View mobile builds',
            'main_menu'=>'builds',
            'sub_menu'=> 'list_builds',
            'main_link'=>'/builds/projects',
            'sort' => 3,
            'icon' => 'fa fa-tripadvisor'
        ],
        PermissionSlug::VIEW_REQUEST => [
            'name' => 'View-Request-Details',
            'description' => 'View Request Details',
            'main_menu'=>'request',
            'sub_menu'=> 'request',
            'main_link'=>'requests',
            'sort' => 5,
            'icon' => 'fa fa-list'
        ],
        PermissionSlug::MANAGE_FAQ => [
            'name' => 'manage-faq',
            'description' => 'View Faq',
            'main_menu'=>'faq',
            'sub_menu'=> null,
            'main_link'=>'faq',
            'sort' => 13,
            'icon' => 'fa fa-question-circle'
        ],
        PermissionSlug::CANCELLATION_REASON => [
            'name' => 'cancellation-title',
            'description' => 'View Cancellation Title',
            'main_menu'=>'cancellation',
            'sub_menu'=> null,
            'main_link'=>'cancellation',
            'sort' => 14,
            'icon' => 'fa fa-ban'
        ],
        PermissionSlug::COMPLAINTS => [
            'name' => 'complaints',
            'description' => 'View Complaints',
            'main_menu'=>'complaints',
            'sub_menu'=> null,
            'main_link'=>'complaint',
            'sort' => 15,
            'icon' => 'fa fa-list-alt'
        ],
        PermissionSlug::COMPLAINT_TITLE => [
            'name' => 'complaint-title',
            'description' => 'View Complaint Title',
            'main_menu'=>'complaints',
            'sub_menu'=> 'complaint-title',
            'sub_link'=>'complaint/title',
            'sort' => 15.1,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::USER_COMPLAINT => [
            'name' => 'user-complaint',
            'description' => 'Manange User Complaint',
            'main_menu'=>'complaints',
            'sub_menu'=> 'user-complaint',
            'sub_link'=>'complaint/users',
            'sort' => 15.2,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::DRIVER_COMPLAINT => [
            'name' => 'driver-complaint',
            'description' => 'Manage Driver Complaint',
            'main_menu'=>'complaints',
            'sub_menu'=> 'driver-complaint',
            'sub_link'=>'complaint/drivers',
            'sort' => 15.3,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::OWNER_COMPLAINT => [
            'name' => 'owner-complaint',
            'description' => 'Manage Owner Complaint',
            'main_menu'=>'complaints',
            'sub_menu'=> 'owner-complaint',
            'sub_link'=>'complaint/owner',
            'sort' => 15.3,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::REPORTS => [
            'name' => 'reports',
            'description' => 'View reports',
            'main_menu'=>'reports',
            'sub_menu'=> null,
            'main_link'=>'reports',
            'sort' => 16,
            'icon' => 'fa fa-file-pdf-o'
        ],
        PermissionSlug::USER_REPORT => [
            'name' => 'user-report',
            'description' => 'Download User Report',
            'main_menu'=>'reports',
            'sub_menu'=> 'user_report',
            'sub_link'=>'reports/user',
            'sort' => 16.1,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::DRIVER_REPORT => [
            'name' => 'driver-report',
            'description' => 'Download Driver Report',
            'main_menu'=>'reports',
            'sub_menu'=> 'driver_report',
            'sub_link'=>'reports/driver',
            'sort' => 16.2,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::FINANCE_REPORT => [
            'name' => 'finance-report',
            'description' => 'Download Finance Report',
            'main_menu'=>'reports',
            'sub_menu'=> 'travel_report',
            'sub_link'=>'reports/travel',
            'sort' => 16.3,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::OWNER_REPORT => [
            'name' => 'owner-report',
            'description' => 'Download Owner Report',
            'main_menu'=>'reports',
            'sub_menu'=> 'owner_report',
            'sub_link'=>'reports/owner',
            'sort' => 16.3,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::MANAGE_MAP => [
            'name' => 'manage-map',
            'description' => 'Manage Map',
            'main_menu'=>'map',
            'sub_menu'=> null,
            'main_link'=>'map',
            'sort' => 17,
            'icon' => 'fa fa-globe'
        ],
        PermissionSlug::HEAT_MAP => [
            'name' => 'heat-map',
            'description' => 'View Heat Map',
            'main_menu'=>'map',
            'sub_menu'=> 'heat_map',
            'sub_link'=>'map/heatmap',
            'sort' => 16.1,
            'icon' => 'fa fa-circle-thin'
        ],
        PermissionSlug::MANAGE_PROMO => [
            'name' => 'manage-promo',
            'description' => 'View Promo code',
            'main_menu'=>'manage-promo',
            'sub_menu'=> null,
            'main_link'=>'promo',
            'sort' => 10,
            'icon' => 'fa fa-gift'
        ],

];

    /**
     * List of all the roles to be created along with their permissions.
     *
     * @var array
     */
    protected $roles = [
        RoleSlug::SUPER_ADMIN => [
            'name' => 'Super Admin',
            'description' => 'Admin group with unrestricted access',
            'all' => true,
        ],
        RoleSlug::USER => [
            'name' => 'Normal User',
            'description' => 'Normal user with standard access',
            'permissions' => []
        ],
         RoleSlug::DEVELOPER => [
            'name' => 'Developer User',
            'description' => 'Normal user with standard access',
            'permissions' => [PermissionSlug::UPLOAD_BUILDS,PermissionSlug::VIEW_BUILDS]
        ],
        RoleSlug::CLIENT => [
            'name' => 'Client User',
            'description' => 'Normal user with standard access',
            'permissions' => [PermissionSlug::VIEW_BUILDS]
        ],
        RoleSlug::ADMIN => [
            'name' => 'Admin',
            'description' => 'Admin group with restricted access',
            'permissions' => [PermissionSlug::GET_ALL_ROLES, PermissionSlug::GET_ALL_PERMISSIONS,PermissionSlug::ACCESS_DASHBOARD,PermissionSlug::SETTINGS,PermissionSlug::VIEW_COMPANIES,PermissionSlug::DRIVERS_MENU,PermissionSlug::VIEW_DRIVERS,PermissionSlug::VIEW_TYPES,PermissionSlug::VIEW_ZONE,PermissionSlug::MAP_MENU,PermissionSlug::VIEW_SYSTEM_SETINGS,PermissionSlug::USER_MENU,PermissionSlug::VIEW_USERS,PermissionSlug::USER_SOS,PermissionSlug::SERVICE_LOCATION,PermissionSlug::ADMIN,PermissionSlug::DISPATCH_REQUEST,PermissionSlug::LIST_AIRPORTS,PermissionSlug::ADD_AIRPORTS,PermissionSlug::EDIT_AIRPORTS],
        ],
       
         RoleSlug::OWNER=>[
            'name' => 'Owner',
            'description' => 'Owner for company management',
            'permissions' => [
                 PermissionSlug::ACCESS_DASHBOARD,PermissionSlug::MANAGE_FLEET,PermissionSlug::CREATE_FLEET,PermissionSlug::EDIT_FLEET,PermissionSlug::DELETE_FLEET,PermissionSlug::FLEET_TOGGLE_STATUS,PermissionSlug::MANAGE_CARMODEL,
                     PermissionSlug::DRIVERS_MENU,PermissionSlug::VIEW_DRIVERS
            ],
        ],
        RoleSlug::DRIVER=>[
            'name' => 'Driver',
            'description' => 'Driver user with standard access',
            'permissions' => [],
        ],
        RoleSlug::DISPATCHER=>[
            'name' => 'Dispatcher',
            'description' => 'Dispatcher user with standard access',
            'permissions' => [],
        ],
        RoleSlug::DELIVERY_DISPATCHER=>[
            'name' => 'Delivery-Dispatcher',
            'description' => 'Dispatcher user with standard access',
            'permissions' => [],
        ],
        


    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            foreach ($this->permissions as $permissionSlug => $attributes) {
                // Create permission if it doesn't exist
                Permission::firstOrCreate(['slug' => $permissionSlug], $attributes);
            }

            foreach ($this->roles as $roleSlug => $role) {
                // Create role if it doesn't exist
                $createdRole = Role::firstOrCreate(
                    ['slug' => $roleSlug],
                    array_merge(array_except($role, ['permissions']), ['locked' => true])
                );

                // Sync permissions
                if (isset($role['permissions'])) {
                    $rolePermissions = $role['permissions'];
                    $rolePermissionIds = Permission::whereIn('slug', $rolePermissions)->pluck('id');
                    $createdRole->permissions()->sync($rolePermissionIds);
                }
            }

            /**
             * Delete all unused permissions
             */
            $existingPermissions = Permission::pluck('slug')->toArray();

            $newPermissions = array_keys($this->permissions);

            $permissionsToDelete = array_diff($existingPermissions, $newPermissions);

            Permission::whereIn('slug', $permissionsToDelete)->delete();
        });
    }
}

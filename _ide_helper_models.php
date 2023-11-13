<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Access{
/**
 * App\Models\Access\Permission
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string|null $description
 * @property string|null $main_menu
 * @property string|null $sub_menu
 * @property string|null $main_link
 * @property string|null $sub_link
 * @property int|null $sort
 * @property string|null $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Access\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereMainLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereMainMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereSubLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereSubMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Access{
/**
 * App\Models\Access\Role
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string|null $description
 * @property int $all
 * @property int $locked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Access\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role active()
 * @method static \Illuminate\Database\Eloquent\Builder|Role inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereAll($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\AdminDetail
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $service_location_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string|null $address
 * @property int|null $country
 * @property string|null $state
 * @property string|null $city
 * @property int|null $pincode
 * @property string $email
 * @property string $mobile
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read string $profile_picture
 * @property-read string $service_location_name
 * @property-read \App\Models\Admin\ServiceLocation|null $serviceLocationDetail
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail active()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDetail whereUserId($value)
 */
	class AdminDetail extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Airport
 *
 * @property string $id
 * @property string $service_location_id
 * @property string $name
 * @property string|null $coordinates
 * @property float|null $lat
 * @property float|null $lng
 * @property float $airport_surge_fee
 * @property string|null $company_key
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport active()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport companyKey()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport comparison($geometryColumn, $geometry, $relationship)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport contains($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport crosses($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport disjoint($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distance($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distanceExcludingSelf($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distanceSphere($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distanceSphereExcludingSelf($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distanceSphereValue($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport distanceValue($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport doesTouch($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport equals($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport inactive()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport intersects($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport newModelQuery()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport newQuery()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport orderByDistance($geometryColumn, $geometry, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport orderByDistanceSphere($geometryColumn, $geometry, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport orderBySpatial($geometryColumn, $geometry, $orderFunction, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport overlaps($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport query()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereActive($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereAirportSurgeFee($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereCompanyKey($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereCoordinates($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereCreatedAt($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereId($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereLat($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereLng($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereName($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereServiceLocationId($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport whereUpdatedAt($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Airport within($geometryColumn, $polygon)
 */
	class Airport extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\CancellationReason
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $user_type
 * @property string|null $transport_type
 * @property string $payment_type
 * @property string $arrival_status
 * @property string $reason
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason active()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereArrivalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CancellationReason whereUserType($value)
 */
	class CancellationReason extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Company
 *
 * @property string $id
 * @property int $admin_id
 * @property string $name
 * @property string $owner_name
 * @property string|null $vat_number
 * @property string $mobile
 * @property string|null $landline
 * @property string $email
 * @property string|null $address
 * @property string|null $postal_code
 * @property string|null $state
 * @property string|null $city
 * @property int $country
 * @property string|null $icon
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User $admin
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Company active()
 * @method static \Illuminate\Database\Eloquent\Builder|Company inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLandline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company withoutTrashed()
 */
	class Company extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Complaint
 *
 * @property string $id
 * @property int|null $user_id
 * @property int|null $driver_id
 * @property string|null $owner_id
 * @property string|null $request_id
 * @property string $complaint_type
 * @property string $complaint_title_id
 * @property string $description
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Admin\ComplaintTitle $complaint
 * @property-read \App\Models\Admin\Driver|null $driver
 * @property-read \App\Models\Admin\Owner|null $owner
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint active()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint query()
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereComplaintTitleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereComplaintType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Complaint whereUserId($value)
 */
	class Complaint extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ComplaintTitle
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $user_type
 * @property string|null $transport_type
 * @property string $complaint_type
 * @property string $title
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle active()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereComplaintType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComplaintTitle whereUserType($value)
 */
	class ComplaintTitle extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Driver
 *
 * @property int $id
 * @property string|null $uuid
 * @property int $user_id
 * @property string|null $owner_id
 * @property string $service_location_id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string|null $address
 * @property string|null $state
 * @property string|null $city
 * @property int|null $country
 * @property string|null $postal_code
 * @property string $gender
 * @property string|null $vehicle_type
 * @property int|null $vehicle_year
 * @property string|null $fleet_id
 * @property string|null $transport_type
 * @property int|null $car_make
 * @property int|null $car_model
 * @property string|null $car_color
 * @property string|null $car_number
 * @property int $today_trip_count
 * @property int $total_accept
 * @property int $total_reject
 * @property int $acceptance_ratio
 * @property string|null $last_trip_date
 * @property int $active
 * @property int $approve
 * @property int $available
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Master\CarMake|null $carMake
 * @property-read \App\Models\Master\CarModel|null $carModel
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\DriverAvailability> $driverAvailabilities
 * @property-read int|null $driver_availabilities_count
 * @property-read \App\Models\Admin\DriverDetail|null $driverDetail
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\DriverDocument> $driverDocument
 * @property-read int|null $driver_document_count
 * @property-read \App\Models\Payment\DriverWallet|null $driverPaymentWallet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\DriverWalletHistory> $driverPaymentWalletHistory
 * @property-read int|null $driver_payment_wallet_history_count
 * @property-read \App\Models\Payment\DriverWallet|null $driverWallet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\DriverWalletHistory> $driverWalletHistory
 * @property-read int|null $driver_wallet_history_count
 * @property-read \App\Models\Admin\Fleet|null $fleetDetail
 * @property-read mixed $car_make_name
 * @property-read mixed $car_model_name
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read mixed $no_of_ratings
 * @property-read string $profile_picture
 * @property-read mixed $rating
 * @property-read mixed $timezone
 * @property-read mixed $vehicle_type_icon_for
 * @property-read mixed $vehicle_type_image
 * @property-read mixed $vehicle_type_name
 * @property-read \App\Models\Admin\Owner|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\DriverPrivilegedVehicle> $privilegedVehicle
 * @property-read int|null $privileged_vehicle_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\DriverRejectedRequest> $rejectedRequestDetail
 * @property-read int|null $rejected_request_detail_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\Request> $requestDetail
 * @property-read int|null $request_detail_count
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\DriverSubscription> $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Admin\VehicleType|null $vehicleType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\WalletWithdrawalRequest> $withdrawalRequestsHistory
 * @property-read int|null $withdrawal_requests_history_count
 * @method static \Illuminate\Database\Eloquent\Builder|Driver active()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver query()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereAcceptanceRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCarColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCarMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCarModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCarNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereLastTripDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereTodayTripCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereTotalAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereTotalReject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver whereVehicleYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Driver withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Driver withoutTrashed()
 */
	class Driver extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\DriverAvailability
 *
 * @property int $id
 * @property int $driver_id
 * @property int $is_online
 * @property string|null $online_at
 * @property string|null $offline_at
 * @property float $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver $driver
 * @property-read mixed $converted_duration_at
 * @property-read mixed $converted_offline_at
 * @property-read mixed $converted_online_at
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereOfflineAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereOnlineAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverAvailability whereUpdatedAt($value)
 */
	class DriverAvailability extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\DriverDetail
 *
 * @property string $id
 * @property int $driver_id
 * @property float|null $latitude
 * @property float|null $longitude
 * @property float|null $bearing
 * @property int $is_socket_connected
 * @property string|null $current_zone
 * @property float $rating
 * @property int $rated_by
 * @property int $is_company_driver
 * @property string|null $company
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin\Driver $driver
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail active()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereBearing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereCurrentZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereIsCompanyDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereIsSocketConnected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereRatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDetail withoutTrashed()
 */
	class DriverDetail extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\DriverDocument
 *
 * @property string $id
 * @property int $driver_id
 * @property int $document_id
 * @property string $image
 * @property string|null $identify_number
 * @property string|null $expiry_date
 * @property string|null $comment
 * @property int $document_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin\Driver $driver
 * @property-read \App\Models\Admin\DriverNeededDocument $driverNeededDocuments
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read string $document_name
 * @property-read string $identify_number_key
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereDocumentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverDocument withoutTrashed()
 */
	class DriverDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\DriverNeededDocument
 *
 * @property int $id
 * @property string $name
 * @property string $doc_type
 * @property int $has_identify_number
 * @property string|null $identify_number_locale_key
 * @property int $has_expiry_date
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $is_individual
 * @property-read \App\Models\Admin\DriverDocument|null $driverDocument
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereDocType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereHasExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereHasIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereIdentifyNumberLocaleKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereIsIndividual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverNeededDocument whereUpdatedAt($value)
 */
	class DriverNeededDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\DriverPrivilegedVehicle
 *
 * @property int $id
 * @property string $owner_id
 * @property int $driver_id
 * @property string $fleet_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Fleet $fleet
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverPrivilegedVehicle whereUpdatedAt($value)
 */
	class DriverPrivilegedVehicle extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Faq
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $service_location_id
 * @property string $question
 * @property string $answer
 * @property string $user_type
 * @property string|null $transport_type
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @method static \Illuminate\Database\Eloquent\Builder|Faq active()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUserType($value)
 */
	class Faq extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Fleet
 *
 * @property string $id
 * @property int|null $driver_id
 * @property string $fleet_id
 * @property string|null $qr_image
 * @property int $owner_id
 * @property int $brand
 * @property int $model
 * @property string $license_number
 * @property string $permission_number
 * @property string $vehicle_type
 * @property string|null $car_color
 * @property int $class_one
 * @property int $class_two
 * @property int $active
 * @property int $approve
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Master\CarMake $carBrand
 * @property-read \App\Models\Master\CarModel $carModel
 * @property-read \App\Models\Admin\Driver|null $driverDetail
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\FleetDocument> $fleetDocument
 * @property-read int|null $fleet_document_count
 * @property-read mixed $fleet_name
 * @property-read mixed $qr_code_image
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Admin\VehicleType $vehicleType
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet active()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCarColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereClassOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereClassTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet wherePermissionNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereQrImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet whereVehicleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Fleet withoutTrashed()
 */
	class Fleet extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\FleetDocument
 *
 * @property string $id
 * @property string $fleet_id
 * @property string $name
 * @property string $image
 * @property string|null $expiry_date
 * @property string|null $identify_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $document_id
 * @property int $document_status
 * @property string|null $comment
 * @property-read \App\Models\Admin\Fleet $fleet
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereDocumentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetDocument withoutTrashed()
 */
	class FleetDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\FleetNeededDocument
 *
 * @property int $id
 * @property string $name
 * @property string $doc_type
 * @property int $has_identify_number
 * @property string|null $identify_number_locale_key
 * @property int $has_expiry_date
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\FleetDocument|null $fleetDocument
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereDocType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereHasExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereHasIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereIdentifyNumberLocaleKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FleetNeededDocument whereUpdatedAt($value)
 */
	class FleetNeededDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Notification
 *
 * @property string $id
 * @property string $push_enum
 * @property string $title
 * @property string $body
 * @property string|null $image
 * @property string|null $data
 * @property int $for_user
 * @property int $for_driver
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read mixed $push_image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\UserDriverNotification> $userNotification
 * @property-read int|null $user_notification_count
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereForDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereForUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification wherePushEnum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Owner
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $transport_type
 * @property string $service_location_id
 * @property string $company_name
 * @property string $owner_name
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $password
 * @property string|null $mobile
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $postal_code
 * @property string|null $city
 * @property string|null $expiry_date
 * @property int $no_of_vehicles
 * @property string $tax_number
 * @property string|null $bank_name
 * @property string|null $ifsc
 * @property string|null $account_no
 * @property string|null $iban
 * @property string|null $bic
 * @property int $active
 * @property int $approve
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin\ServiceLocation $area
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\OwnerDocument> $ownerDocument
 * @property-read int|null $owner_document_count
 * @property-read \App\Models\Payment\OwnerWallet|null $ownerWalletDetail
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\OwnerWalletHistory> $ownerWalletHistoryDetail
 * @property-read int|null $owner_wallet_history_detail_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Owner active()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereAccountNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereApprove($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereBic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereIban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereIfsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereNoOfVehicles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereTaxNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner withoutTrashed()
 */
	class Owner extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\OwnerDocument
 *
 * @property string $id
 * @property string $owner_id
 * @property int $document_id
 * @property string $image
 * @property string|null $identify_number
 * @property string|null $expiry_date
 * @property string|null $comment
 * @property int $document_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin\Owner $owner
 * @property-read \App\Models\Admin\OwnerNeededDocument $ownerNeededDocuments
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereDocumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereDocumentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerDocument withoutTrashed()
 */
	class OwnerDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\OwnerHiredDriver
 *
 * @property int $id
 * @property string $owner_id
 * @property int $driver_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver query()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerHiredDriver whereUpdatedAt($value)
 */
	class OwnerHiredDriver extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\OwnerNeededDocument
 *
 * @property int $id
 * @property string $name
 * @property string $doc_type
 * @property int $has_identify_number
 * @property string|null $identify_number_locale_key
 * @property int $has_expiry_date
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\OwnerDocument|null $ownerDocument
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument active()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereDocType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereHasExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereHasIdentifyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereIdentifyNumberLocaleKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerNeededDocument whereUpdatedAt($value)
 */
	class OwnerNeededDocument extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Promo
 *
 * @property string $id
 * @property string $service_location_id
 * @property string $code
 * @property int $minimum_trip_amount
 * @property int $maximum_discount_amount
 * @property int $discount_percent
 * @property int $total_uses
 * @property int $uses_per_user
 * @property string $from
 * @property string $to
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $from_date
 * @property-read mixed $to_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\PromoUser> $promoUsers
 * @property-read int|null $promo_users_count
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @method static \Illuminate\Database\Eloquent\Builder|Promo active()
 * @method static \Illuminate\Database\Eloquent\Builder|Promo inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Promo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereMaximumDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereMinimumTripAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereTotalUses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promo whereUsesPerUser($value)
 */
	class Promo extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\PromoUser
 *
 * @property int $id
 * @property string $promo_code_id
 * @property int $user_id
 * @property string $request_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Promo $promo
 * @property-read \App\Models\Request\Request $request
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser wherePromoCodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PromoUser whereUserId($value)
 */
	class PromoUser extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ServiceLocation
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $name
 * @property string|null $currency_name
 * @property string|null $currency_code
 * @property string|null $currency_symbol
 * @property string $timezone
 * @property int $country
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\Zone> $zones
 * @property-read int|null $zones_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation active()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceLocation withoutTrashed()
 */
	class ServiceLocation extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Sos
 *
 * @property string $id
 * @property string|null $company_key
 * @property string|null $service_location_id
 * @property string $name
 * @property string $number
 * @property string $user_type
 * @property int|null $created_by
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\ServiceLocation|null $serviceLocation
 * @method static \Illuminate\Database\Eloquent\Builder|Sos active()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sos withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Sos withoutTrashed()
 */
	class Sos extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\UserDetails
 *
 * @property string $id
 * @property int $user_id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string|null $address
 * @property string|null $state
 * @property string|null $city
 * @property int $country
 * @property string|null $country_code
 * @property string $gender
 * @property string|null $profile
 * @property string|null $token
 * @property string|null $token_expiry
 * @property string|null $device_token
 * @property string|null $login_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails active()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereLoginBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereTokenExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetails withoutTrashed()
 */
	class UserDetails extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\UserDriverNotification
 *
 * @property string $id
 * @property string $notify_id
 * @property int|null $user_id
 * @property int|null $driver_id
 * @property int $is_read
 * @property string|null $read_at
 * @property string|null $push_enum
 * @property string|null $title
 * @property string|null $body
 * @property string|null $image
 * @property string|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereNotifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification wherePushEnum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDriverNotification whereUserId($value)
 */
	class UserDriverNotification extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\VehicleType
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $name
 * @property string $icon
 * @property string|null $icon_types_for
 * @property int $capacity
 * @property string|null $size
 * @property string|null $description
 * @property string|null $short_description
 * @property string|null $supported_vehicles
 * @property int $is_accept_share_ride
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $is_taxi
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\ZoneType> $zoneType
 * @property-read int|null $zone_type_count
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType active()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereIconTypesFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereIsAcceptShareRide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereIsTaxi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereSupportedVehicles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType withoutTrashed()
 */
	class VehicleType extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Zone
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $service_location_id
 * @property string $name
 * @property int $unit
 * @property string|null $coordinates
 * @property int $active
 * @property string|null $default_vehicle_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $lat
 * @property float $lng
 * @property string|null $default_vehicle_type_for_delivery
 * @property-read \App\Models\User $admin
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocation
 * @property-read \App\Models\Admin\ZoneBound|null $zoneBound
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\ZoneSurgePrice> $zoneSurge
 * @property-read int|null $zone_surge_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\ZoneType> $zoneType
 * @property-read int|null $zone_type_count
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone active()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone companyKey()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone comparison($geometryColumn, $geometry, $relationship)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone contains($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone crosses($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone disjoint($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distance($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distanceExcludingSelf($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distanceSphere($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distanceSphereExcludingSelf($geometryColumn, $geometry, $distance)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distanceSphereValue($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone distanceValue($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone doesTouch($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone equals($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone inactive()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone intersects($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone newModelQuery()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone newQuery()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone orderByDistance($geometryColumn, $geometry, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone orderByDistanceSphere($geometryColumn, $geometry, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone orderBySpatial($geometryColumn, $geometry, $orderFunction, $direction = 'asc')
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone overlaps($geometryColumn, $geometry)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone query()
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereActive($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereCompanyKey($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereCoordinates($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereCreatedAt($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereDefaultVehicleType($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereDefaultVehicleTypeForDelivery($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereId($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereLat($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereLng($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereName($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereServiceLocationId($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereUnit($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone whereUpdatedAt($value)
 * @method static \Grimzy\LaravelMysqlSpatial\Eloquent\Builder|Zone within($geometryColumn, $polygon)
 */
	class Zone extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ZoneBound
 *
 * @property string $id
 * @property string $zone_id
 * @property float|null $north
 * @property float|null $east
 * @property float|null $south
 * @property float|null $west
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Zone $zone
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound active()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereEast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereNorth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereSouth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereWest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneBound whereZoneId($value)
 */
	class ZoneBound extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ZoneSurgePrice
 *
 * @property int $id
 * @property string $zone_id
 * @property string $start_time
 * @property string $end_time
 * @property int $value In percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read mixed $from
 * @property-read mixed $to
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice active()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneSurgePrice whereZoneId($value)
 */
	class ZoneSurgePrice extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ZoneType
 *
 * @property string $id
 * @property string $zone_id
 * @property string $type_id
 * @property int $bill_status 0 => Not show,1 => show bill
 * @property string|null $transport_type
 * @property string $payment_type 1 => Card,2 => Cash,3 => Wallet
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $icon
 * @property-read string $vehicle_type_name
 * @property-read \App\Models\Admin\VehicleType $vehicleType
 * @property-read \App\Models\Admin\Zone $zone
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\ZoneTypePackagePrice> $zoneTypePackage
 * @property-read int|null $zone_type_package_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\ZoneTypePrice> $zoneTypePrice
 * @property-read int|null $zone_type_price_count
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType active()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereBillStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType whereZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneType withoutTrashed()
 */
	class ZoneType extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ZoneTypePackagePrice
 *
 * @property string $id
 * @property string $zone_type_id
 * @property string|null $zone_id
 * @property float $base_price
 * @property string $package_type_id
 * @property string $distance_price_per_km
 * @property string $time_price_per_min
 * @property string $cancellation_fee
 * @property string $free_distance
 * @property string $free_min
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Master\PackageType|null $PackageName
 * @property-read \App\Models\Admin\ZoneType $zoneType
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice active()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereCancellationFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereDistancePricePerKm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereFreeDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereFreeMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice wherePackageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereTimePricePerMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereZoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice whereZoneTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePackagePrice withoutTrashed()
 */
	class ZoneTypePackagePrice extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\ZoneTypePrice
 *
 * @property string $id
 * @property string $zone_type_id
 * @property int|null $price_type 1 => Ridenow,2 => RideLater
 * @property float $base_price
 * @property int $base_distance
 * @property float $price_per_distance
 * @property int $free_waiting_time_in_mins_before_trip_start
 * @property int $free_waiting_time_in_mins_after_trip_start
 * @property float $waiting_charge
 * @property float $price_per_time
 * @property float $cancellation_fee
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\ZoneType $zoneType
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice active()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereBaseDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereCancellationFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereFreeWaitingTimeInMinsAfterTripStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereFreeWaitingTimeInMinsBeforeTripStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice wherePricePerDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice wherePricePerTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice wherePriceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereWaitingCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice whereZoneTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneTypePrice withoutTrashed()
 */
	class ZoneTypePrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Area
 *
 * @property string $name
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Area newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Area query()
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Area whereUpdatedAt($value)
 */
	class Area extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AssetObject
 *
 * @property int $id
 * @property string $object_id
 * @property string $contract_transaction
 * @property string $customer
 * @property string $invoice_type
 * @property string $frequency
 * @property string $object_type
 * @property string $emirates
 * @property string $visiting_address
 * @property string $city
 * @property string|null $contact_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $remarks
 * @property string|null $last_visit_date
 * @property int $rider_id
 * @property \App\Models\Area|null $area
 * @property string $google_address
 * @property string $month_wise_remarks
 * @property string $batch
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver|null $rider
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject filters($request)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereContactName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereContractTransaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereEmirates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereFrequency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereGoogleAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereInvoiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereLastVisitDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereMonthWiseRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereObjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereRiderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssetObject whereVisitingAddress($value)
 */
	class AssetObject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property string $id
 * @property string $slug
 * @property string $name
 * @property string|null $alias
 * @property int|null $display_order
 * @property int $active
 * @property string $state_id
 * @property-read \App\Models\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|City active()
 * @method static \Illuminate\Database\Eloquent\Builder|City inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models\Cms{
/**
 * App\Models\Cms\FrontPage
 *
 * @property int $id
 * @property int $userid
 * @property string $tabfaviconfile
 * @property string $faviconfile
 * @property string $bannerimage
 * @property string $description
 * @property string $playstoreicon1
 * @property string $playstoreicon2
 * @property string $firstrowimage1
 * @property string $firstrowheadtext1
 * @property string $firstrowsubtext1
 * @property string $firstrowimage2
 * @property string $firstrowheadtext2
 * @property string $firstrowsubtext2
 * @property string $firstrowimage3
 * @property string $firstrowheadtext3
 * @property string $firstrowsubtext3
 * @property string $secondrowimage1
 * @property string $secondrowheadtext1
 * @property string $secondrowimage2
 * @property string $secondrowheadtext2
 * @property string $secondrowimage3
 * @property string $secondrowheadtext3
 * @property string $footertextsub
 * @property string $footercopytextsub
 * @property string $footerlogo
 * @property string $footerinstagramlink
 * @property string $footerfacebooklink
 * @property string $safety
 * @property string $safetytext
 * @property string $serviceheadtext
 * @property string $servicesubtext
 * @property string $serviceimage
 * @property string $privacy
 * @property string $dmv
 * @property string $complaince
 * @property string $terms
 * @property string $frimage
 * @property string $frtext
 * @property string $srimage
 * @property string $srtext
 * @property string $trimage
 * @property string $trtext
 * @property string $afrimage
 * @property string $afrhtext
 * @property string $afrstext
 * @property string $asrtext
 * @property string $asrimage1
 * @property string $asrhtext1
 * @property string $asrstext1
 * @property string $asrimage2
 * @property string $asrhtext2
 * @property string $asrstext2
 * @property string $asrimage3
 * @property string $asrhtext3
 * @property string $asrstext3
 * @property string $atrhtext
 * @property string $atrthtext1
 * @property string $atrtimage1
 * @property string $atrtstext1
 * @property string $atrthtext2
 * @property string $atrtimage2
 * @property string $atrtstext2
 * @property string $atrthtext3
 * @property string $atrtimage3
 * @property string $atrtstext3
 * @property string $afrbimage
 * @property string $afrlimage
 * @property string $afrheadtext
 * @property string $afrstext1
 * @property string $afrstext2
 * @property string $afrstext3
 * @property string $afrstext4
 * @property string $howbannerimage
 * @property string $hfrht1
 * @property string $hfrcimage1
 * @property string $hfrht2
 * @property string $hsrht1
 * @property string $hsrcimage1
 * @property string $hsrht2
 * @property string $htrht1
 * @property string $htrcimage1
 * @property string $htrht2
 * @property string $hforht1
 * @property string $hforcimage1
 * @property string $hforht2
 * @property string $hfirht1
 * @property string $hfircimage1
 * @property string $hfirht2
 * @property string $hsirht1
 * @property string $hsircimage1
 * @property string $hsirht2
 * @property string $hserht1
 * @property string $hsercimage1
 * @property string $hserht2
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $contactbanner
 * @property string $contacttext
 * @property string $contactmap
 * @property string $driverioslink
 * @property string $driverandroidlink
 * @property string $userioslink
 * @property string $userandroidlink
 * @property string $menucolor
 * @property string $menutextcolor
 * @property string $menutexthover
 * @property string $firstrowbgcolor
 * @property string $hdriverdownloadcolor
 * @property string $hownumberbgcolor
 * @property string $footerbgcolor
 * @property-read string $fav_icon_picture
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrbimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrheadtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrhtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrlimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrstext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrstext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrstext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrstext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAfrstext4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrhtext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrhtext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrhtext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrimage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrimage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrstext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrstext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrstext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAsrtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrhtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrthtext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrthtext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrthtext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtimage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtimage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtstext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtstext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereAtrtstext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereBannerimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereComplaince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereContactbanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereContactmap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereContacttext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereDmv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereDriverandroidlink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereDriverioslink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFaviconfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowbgcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowheadtext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowheadtext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowheadtext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowimage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowimage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowsubtext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowsubtext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFirstrowsubtext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFooterbgcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFootercopytextsub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFooterfacebooklink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFooterinstagramlink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFooterlogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFootertextsub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFrimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereFrtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHdriverdownloadcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfircimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfirht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfirht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHforcimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHforht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHforht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfrcimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfrht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHfrht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHowbannerimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHownumberbgcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsercimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHserht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHserht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsircimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsirht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsirht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsrcimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsrht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHsrht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHtrcimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHtrht1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereHtrht2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereMenucolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereMenutextcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereMenutexthover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage wherePlaystoreicon1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage wherePlaystoreicon2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage wherePrivacy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSafety($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSafetytext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowheadtext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowheadtext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowheadtext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowimage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowimage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSecondrowimage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereServiceheadtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereServiceimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereServicesubtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSrimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereSrtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereTabfaviconfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereTrimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereTrtext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereUserandroidlink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontPage whereUserioslink($value)
 */
	class FrontPage extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\AdminUsersCompanyKey
 *
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|AdminUsersCompanyKey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminUsersCompanyKey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminUsersCompanyKey query()
 */
	class AdminUsersCompanyKey extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Subscriber
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string $dial_code
 * @property int $dial_min_length
 * @property int $dial_max_length
 * @property string|null $code
 * @property string|null $currency_name
 * @property string|null $currency_code
 * @property string|null $currency_symbol
 * @property string $flag
 * @property int $active
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country active()
 * @method static \Illuminate\Database\Eloquent\Builder|Country inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDialCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDialMaxLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDialMinLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Demo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Demo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Demo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Demo query()
 */
	class Demo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\InvoiceType
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvoiceType whereUpdatedAt($value)
 */
	class InvoiceType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LinkedSocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $provider_name
 * @property string|null $provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount active()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereProviderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkedSocialAccount whereUserId($value)
 */
	class LinkedSocialAccount extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\CarMake
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $vehicle_make_for
 * @property string|null $transport_type
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Master\CarModel|null $modelDetail
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake active()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMake whereVehicleMakeFor($value)
 */
	class CarMake extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\CarModel
 *
 * @property int $id
 * @property int $make_id
 * @property string|null $name
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Master\CarMake $makeDetail
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel active()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereMakeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereUpdatedAt($value)
 */
	class CarModel extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\Developer
 *
 * @property string $id
 * @property int $user_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string|null $address
 * @property int $country
 * @property string|null $state
 * @property string|null $city
 * @property int $pincode
 * @property string $email
 * @property string $mobile
 * @property string $team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereUserId($value)
 */
	class Developer extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\DistanceMatrix
 *
 * @property int $id
 * @property string $origin_addresses
 * @property float $origin_lat
 * @property float $origin_lng
 * @property string $destination_addresses
 * @property float $destination_lat
 * @property float $destination_lng
 * @property string $distance
 * @property string $duration
 * @property string $json_result
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix query()
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereDestinationAddresses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereDestinationLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereDestinationLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereJsonResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereOriginAddresses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereOriginLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereOriginLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DistanceMatrix whereUpdatedAt($value)
 */
	class DistanceMatrix extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\GoodsType
 *
 * @property int $id
 * @property string $goods_type_name
 * @property string|null $company_key
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType active()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType query()
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereGoodsTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoodsType whereUpdatedAt($value)
 */
	class GoodsType extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\MobileBuild
 *
 * @property int $id
 * @property string $project_name
 * @property string $build_number
 * @property int $project_id
 * @property int $flavour_id
 * @property string $team
 * @property string $version
 * @property string $environment
 * @property string $file_size
 * @property string $download_link
 * @property string|null $uploaded_by
 * @property string|null $additional_comments
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Master\ProjectFlavour $flavour
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read mixed $flavour_name
 * @property-read mixed $short_additional_comments
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild active()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereAdditionalComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereBuildNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereDownloadLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereEnvironment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereFileSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereFlavourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereUploadedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileBuild whereVersion($value)
 */
	class MobileBuild extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\PackageType
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $transport_type
 * @property int $active
 * @property string|null $short_description
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType active()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PackageType whereUpdatedAt($value)
 */
	class PackageType extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\PocClient
 *
 * @property string $id
 * @property int $project_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PocClient whereUserId($value)
 */
	class PocClient extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\Project
 *
 * @property int $id
 * @property string $project_name
 * @property string|null $poc_name
 * @property string|null $poc_email
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Master\PocClient> $pocClient
 * @property-read int|null $poc_client_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project active()
 * @method static \Illuminate\Database\Eloquent\Builder|Project inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Project searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePocEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models\Master{
/**
 * App\Models\Master\ProjectFlavour
 *
 * @property int $id
 * @property int $project_id
 * @property string $flavour_name
 * @property string $app_name
 * @property string $bundle_identifier
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereAppName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereBundleIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereFlavourName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectFlavour whereUpdatedAt($value)
 */
	class ProjectFlavour extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MobileOtp
 *
 * @property string $id
 * @property string $mobile
 * @property string|null $otp
 * @property int $verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileOtp whereVerified($value)
 */
	class MobileOtp extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\CardInfo
 *
 * @property string $id
 * @property string $customer_id
 * @property string $merchant_id
 * @property string $card_token
 * @property string $valid_through
 * @property int $last_number
 * @property string $card_type
 * @property int $user_id
 * @property int $is_default
 * @property string $user_role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereCardToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereCardType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereLastNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereUserRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo whereValidThrough($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CardInfo withoutTrashed()
 */
	class CardInfo extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\DriverSubscription
 *
 * @property string $id
 * @property int $driver_id
 * @property string $transaction_id
 * @property string $subscription_type
 * @property int $active
 * @property float $paid_amount
 * @property string $expired_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereSubscriptionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverSubscription whereUpdatedAt($value)
 */
	class DriverSubscription extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\DriverWallet
 *
 * @property string $id
 * @property int $user_id
 * @property float $amount_added
 * @property float $amount_balance
 * @property float $amount_spent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver $driver
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereAmountAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereAmountBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereAmountSpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWallet whereUserId($value)
 */
	class DriverWallet extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\DriverWalletHistory
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $card_id
 * @property string|null $request_id
 * @property string|null $refferal_code
 * @property string|null $transaction_id
 * @property float $amount
 * @property string|null $conversion
 * @property string|null $merchant
 * @property string|null $remarks
 * @property int $is_credit
 * @property string|null $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver $driver
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Request\Request|null $requestDetail
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereConversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereIsCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereMerchant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereRefferalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverWalletHistory whereUserId($value)
 */
	class DriverWalletHistory extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\OwnerWallet
 *
 * @property string $id
 * @property string $user_id
 * @property float $amount_added
 * @property float $amount_balance
 * @property float $amount_spent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\Owner $owner
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereAmountAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereAmountBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereAmountSpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWallet whereUserId($value)
 */
	class OwnerWallet extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\OwnerWalletHistory
 *
 * @property string $id
 * @property string $user_id
 * @property string|null $card_id
 * @property string|null $request_id
 * @property string|null $transaction_id
 * @property float $amount
 * @property string|null $conversion
 * @property string|null $merchant
 * @property string|null $remarks
 * @property int $is_credit
 * @property string|null $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\Owner $ownerDetail
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereConversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereIsCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereMerchant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OwnerWalletHistory whereUserId($value)
 */
	class OwnerWalletHistory extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\UserBankInfo
 *
 * @property string $id
 * @property int $user_id
 * @property string $account_name
 * @property string $account_no
 * @property string $bank_code
 * @property string $bank_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereAccountNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBankInfo whereUserId($value)
 */
	class UserBankInfo extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\UserWallet
 *
 * @property string $id
 * @property int $user_id
 * @property float $amount_added
 * @property float $amount_balance
 * @property float $amount_spent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereAmountAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereAmountBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereAmountSpent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereUserId($value)
 */
	class UserWallet extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\UserWalletHistory
 *
 * @property string $id
 * @property int $user_id
 * @property string|null $card_id
 * @property string|null $request_id
 * @property string|null $refferal_code
 * @property string|null $transaction_id
 * @property float $amount
 * @property string|null $conversion
 * @property string|null $merchant
 * @property string|null $remarks
 * @property int $is_credit
 * @property string|null $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereConversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereIsCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereMerchant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereRefferalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletHistory whereUserId($value)
 */
	class UserWalletHistory extends \Eloquent {}
}

namespace App\Models\Payment{
/**
 * App\Models\Payment\WalletWithdrawalRequest
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $driver_id
 * @property string|null $owner_id
 * @property float $requested_amount
 * @property string|null $requested_currency
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver|null $driverDetail
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Admin\Owner|null $ownerDetail
 * @property-read \App\Models\User|null $userDetail
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereRequestedAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereRequestedCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletWithdrawalRequest whereUserId($value)
 */
	class WalletWithdrawalRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reading
 *
 * @property int $id
 * @property int $object_id
 * @property int $reading_type_id
 * @property string $reading_value
 * @property string $visit_date
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AssetObject $object
 * @property-read \App\Models\ReadingType $reading_type
 * @method static \Illuminate\Database\Eloquent\Builder|Reading newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reading newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reading query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereReadingTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereReadingValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reading whereVisitDate($value)
 */
	class Reading extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReadingType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReadingType whereUpdatedAt($value)
 */
	class ReadingType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Remark
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Remark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remark query()
 * @method static \Illuminate\Database\Eloquent\Builder|Remark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remark whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remark whereUpdatedAt($value)
 */
	class Remark extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\AdHocUser
 *
 * @property int $id
 * @property string $request_id
 * @property string $name
 * @property string|null $email
 * @property string|null $mobile
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $profile_pic
 * @property-read \App\Models\Request\Request $request
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser active()
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdHocUser whereUpdatedAt($value)
 */
	class AdHocUser extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\Chat
 *
 * @property string $id
 * @property string $message
 * @property int $from_type 1:user,2:driver
 * @property string $request_id
 * @property int $user_id
 * @property int $delivered
 * @property int $seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $converted_created_at
 * @property-read \App\Models\Request\Request $requestDetail
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereFromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUserId($value)
 */
	class Chat extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\DriverRejectedRequest
 *
 * @property int $id
 * @property string $request_id
 * @property int $driver_id
 * @property int $is_after_accept
 * @property string|null $reason
 * @property string|null $custom_reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereCustomReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereIsAfterAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverRejectedRequest whereUpdatedAt($value)
 */
	class DriverRejectedRequest extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\FavouriteLocation
 *
 * @property int $id
 * @property int|null $user_id
 * @property float|null $pick_lat
 * @property float|null $pick_lng
 * @property float|null $drop_lat
 * @property float|null $drop_lng
 * @property string|null $pick_address
 * @property string|null $drop_address
 * @property string|null $address_name
 * @property string|null $landmark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation query()
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereAddressName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereDropAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereDropLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereDropLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereLandmark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation wherePickAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation wherePickLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation wherePickLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FavouriteLocation whereUserId($value)
 */
	class FavouriteLocation extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\Request
 *
 * @property string $id
 * @property string|null $company_key
 * @property string $request_number
 * @property int $is_later
 * @property int $is_rental
 * @property int|null $rental_package_id
 * @property int $is_out_station
 * @property int|null $ride_otp
 * @property int $instant_ride
 * @property int $book_for_other
 * @property string $book_for_other_contact
 * @property int $attempt_for_schedule
 * @property int|null $user_id
 * @property string|null $transport_type
 * @property int|null $goods_type_id
 * @property string|null $goods_type_quantity
 * @property string $service_location_id
 * @property string|null $zone_type_id
 * @property int|null $driver_id
 * @property string|null $fleet_id
 * @property string|null $owner_id
 * @property string|null $trip_start_time
 * @property string|null $arrived_at
 * @property string|null $accepted_at
 * @property string|null $completed_at
 * @property string|null $cancelled_at
 * @property int $is_driver_started
 * @property int $is_driver_arrived
 * @property int $is_trip_start
 * @property int $is_completed
 * @property int $is_cancelled
 * @property string|null $reason
 * @property string|null $custom_reason
 * @property string $cancel_method 0 => Automatic,1 => User,2 => Driver,3=> Dispatcher
 * @property float $total_distance
 * @property float $total_time
 * @property int $is_surge_applied
 * @property string $payment_opt 0 => card,1 => cash,2 => wallet,3=>wallet/cash
 * @property int $is_paid
 * @property float $request_eta_amount
 * @property int $user_rated
 * @property int $driver_rated
 * @property string|null $promo_id
 * @property string|null $timezone
 * @property string|null $requested_currency_code
 * @property string|null $requested_currency_symbol
 * @property string $unit 1 => kilometers,2 => miles
 * @property int $if_dispatch
 * @property string|null $dispatcher_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $invoice_number
 * @property string $pick_address
 * @property string|null $second_pickup_address
 * @property string|null $third_pickup_address
 * @property string $drop_address
 * @property string|null $building_number
 * @property string|null $cash_to_be_collected
 * @property string|null $invoice_amount
 * @property string|null $invoice_document
 * @property string|null $pickup_poc_name
 * @property string|null $pickup_poc_mobile
 * @property string|null $drop_poc_mobile
 * @property string|null $drop_poc_name
 * @property string|null $second_pickup_lat
 * @property string|null $second_pickup_lng
 * @property string|null $third_pickup_lat
 * @property string|null $third_pickup_lng
 * @property-read \App\Models\Request\AdHocUser|null $adHocuserDetail
 * @property-read \App\Models\Admin\CancellationReason|null $cancelReason
 * @property-read \App\Models\Admin\Driver|null $driverDetail
 * @property-read string $converted_accepted_at
 * @property-read string $converted_arrived_at
 * @property-read string $converted_cancelled_at
 * @property-read string $converted_completed_at
 * @property-read string $converted_created_at
 * @property-read string $converted_trip_start_time
 * @property-read string $converted_updated_at
 * @property-read mixed $currency
 * @property-read string $drop_lat
 * @property-read string $drop_lng
 * @property-read string $pick_lat
 * @property-read string $pick_lng
 * @property-read mixed $request_unit
 * @property-read string $vehicle_type_image
 * @property-read string $vehicle_type_name
 * @property-read \App\Models\Master\GoodsType|null $goodsTypeDetail
 * @property-read \App\Models\Admin\Owner|null $ownerDetail
 * @property-read \App\Models\Master\PackageType|null $rentalPackage
 * @property-read \App\Models\Request\RequestBill|null $requestBill
 * @property-read \App\Models\Request\RequestBill|null $requestBillDetail
 * @property-read \App\Models\Request\RequestCancellationFee|null $requestCancellationFee
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\Chat> $requestChat
 * @property-read int|null $request_chat_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\RequestMeta> $requestMeta
 * @property-read int|null $request_meta_count
 * @property-read \App\Models\Request\RequestPlace|null $requestPlace
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\RequestDeliveryProof> $requestProofs
 * @property-read int|null $request_proofs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\RequestRating> $requestRating
 * @property-read int|null $request_rating_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\RequestStop> $requestStops
 * @property-read int|null $request_stops_count
 * @property-read \App\Models\Admin\ServiceLocation $serviceLocationDetail
 * @property-read \App\Models\User|null $userDetail
 * @property-read \App\Models\Admin\ZoneType|null $zoneType
 * @method static \Illuminate\Database\Eloquent\Builder|Request companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|Request newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Request newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Request query()
 * @method static \Illuminate\Database\Eloquent\Builder|Request search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Request searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereAcceptedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereArrivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereAttemptForSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereBookForOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereBookForOtherContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereBuildingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCancelMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCancelledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCashToBeCollected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereCustomReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDispatcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDriverRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDropAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDropPocMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereDropPocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereFleetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereGoodsTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereGoodsTypeQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIfDispatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereInstantRide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereInvoiceAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereInvoiceDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsDriverArrived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsDriverStarted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsLater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsOutStation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsRental($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsSurgeApplied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereIsTripStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePaymentOpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePickAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePickupPocMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePickupPocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request wherePromoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRentalPackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRequestEtaAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRequestNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRequestedCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRequestedCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereRideOtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereSecondPickupAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereSecondPickupLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereSecondPickupLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereServiceLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereThirdPickupAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereThirdPickupLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereThirdPickupLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTotalDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTotalTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTransportType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereTripStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereUserRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Request whereZoneTypeId($value)
 */
	class Request extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestBill
 *
 * @property int $id
 * @property string $request_id
 * @property float $base_price
 * @property int $base_distance
 * @property float $total_distance
 * @property float $total_time
 * @property float $price_per_distance
 * @property float $distance_price
 * @property float $price_per_time
 * @property float $time_price
 * @property int $waiting_charge_per_min
 * @property int $calculated_waiting_time
 * @property int $after_trip_start_waiting_time
 * @property int $before_trip_start_waiting_time
 * @property float $airport_surge_fee
 * @property float $waiting_charge
 * @property float $cancellation_fee
 * @property float $service_tax
 * @property int $service_tax_percentage
 * @property float $promo_discount
 * @property float $admin_commision
 * @property float $admin_commision_with_tax
 * @property float $driver_commision
 * @property float $total_amount
 * @property string $requested_currency_code
 * @property string|null $requested_currency_symbol
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Request\Request $requestDetail
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereAdminCommision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereAdminCommisionWithTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereAfterTripStartWaitingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereAirportSurgeFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereBaseDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereBeforeTripStartWaitingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereCalculatedWaitingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereCancellationFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereDistancePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereDriverCommision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill wherePricePerDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill wherePricePerTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill wherePromoDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereRequestedCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereRequestedCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereServiceTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereServiceTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereTimePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereTotalDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereTotalTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereWaitingCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestBill whereWaitingChargePerMin($value)
 */
	class RequestBill extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestCancellationFee
 *
 * @property int $id
 * @property string $request_id
 * @property int|null $user_id
 * @property int|null $driver_id
 * @property float $cancellation_fee
 * @property int $is_paid
 * @property string|null $paid_request_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver|null $driverDetail
 * @property-read \App\Models\Request\Request|null $paidRequestDetail
 * @property-read \App\Models\Request\Request $requestDetail
 * @property-read \App\Models\User|null $userDetail
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereCancellationFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee wherePaidRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestCancellationFee whereUserId($value)
 */
	class RequestCancellationFee extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestDeliveryProof
 *
 * @property int $id
 * @property string $request_id
 * @property int $after_load
 * @property int $after_unload
 * @property string $proof_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Request\Request $request
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereAfterLoad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereAfterUnload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereProofImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestDeliveryProof whereUpdatedAt($value)
 */
	class RequestDeliveryProof extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestMeta
 *
 * @property int $id
 * @property string $request_id
 * @property int|null $user_id
 * @property int $driver_id
 * @property int $active
 * @property string $assign_method 1 => one-by-one,2 => all
 * @property int $is_later
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver $driver
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \App\Models\Request\Request $request
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta active()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereAssignMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereIsLater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestMeta whereUserId($value)
 */
	class RequestMeta extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestPlace
 *
 * @property int $id
 * @property string $request_id
 * @property float|null $pick_lat
 * @property float|null $pick_lng
 * @property float|null $drop_lat
 * @property float|null $drop_lng
 * @property string|null $request_path
 * @property string|null $pick_address
 * @property string|null $drop_address
 * @property string|null $pickup_poc_name
 * @property string|null $drop_poc_name
 * @property string|null $pickup_poc_mobile
 * @property string|null $pickup_poc_instruction
 * @property string|null $drop_poc_mobile
 * @property string|null $drop_poc_instruction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropPocInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropPocMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereDropPocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickupPocInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickupPocMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace wherePickupPocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereRequestPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestPlace whereUpdatedAt($value)
 */
	class RequestPlace extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestRating
 *
 * @property int $id
 * @property string $request_id
 * @property int|null $user_id
 * @property int $driver_id
 * @property float $rating
 * @property string|null $comment
 * @property int $user_rating
 * @property int $driver_rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin\Driver $driverDetail
 * @property-read mixed $converted_created_at
 * @property-read \App\Models\Request\Request $requestDetail
 * @property-read \App\Models\User|null $userDetail
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereDriverRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestRating whereUserRating($value)
 */
	class RequestRating extends \Eloquent {}
}

namespace App\Models\Request{
/**
 * App\Models\Request\RequestStop
 *
 * @property int $id
 * @property string $request_id
 * @property string|null $address
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $poc_name
 * @property string|null $poc_mobile
 * @property string|null $poc_instruction
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Request\Request $request
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop query()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop wherePocInstruction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop wherePocMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop wherePocName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RequestStop whereUpdatedAt($value)
 */
	class RequestStop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $name
 * @property string $field
 * @property string|null $category
 * @property string|null $value
 * @property string|null $option_value
 * @property string|null $group_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $app_logo
 * @property-read mixed $fav_icon
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereOptionValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property string $id
 * @property string $slug
 * @property string $name
 * @property int $active
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\City> $cities
 * @property-read int|null $cities_count
 * @method static \Illuminate\Database\Eloquent\Builder|State active()
 * @method static \Illuminate\Database\Eloquent\Builder|State inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereSlug($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TimeZone
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $timezone
 * @property int $active
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property mixed $utc
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone active()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone query()
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TimeZone whereUpdatedAt($value)
 */
	class TimeZone extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $company_key
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property string $mobile
 * @property string $profile_picture
 * @property int|null $country
 * @property string|null $timezone
 * @property int $active
 * @property int $email_confirmed
 * @property int $mobile_confirmed
 * @property string|null $email_confirmation_token
 * @property string|null $fcm_token
 * @property string|null $apn_token
 * @property string|null $refferal_code
 * @property int|null $referred_by
 * @property float $rating
 * @property string|null $lang
 * @property float $rating_total
 * @property int $no_of_ratings
 * @property string|null $login_by
 * @property string|null $remember_token
 * @property string|null $last_known_ip
 * @property string|null $last_login_at
 * @property string|null $social_provider
 * @property string|null $social_nickname
 * @property string|null $social_id
 * @property string|null $social_token
 * @property string|null $social_token_secret
 * @property string|null $social_refresh_token
 * @property string|null $social_expires_in
 * @property string|null $social_avatar
 * @property string|null $social_avatar_original
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LinkedSocialAccount> $accounts
 * @property-read int|null $accounts_count
 * @property-read \App\Models\Admin\AdminDetail|null $admin
 * @property-read \App\Models\Payment\UserBankInfo|null $bankInfo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Client> $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\Country|null $countryDetail
 * @property-read \App\Models\Master\Developer|null $developer
 * @property-read \App\Models\Admin\Driver|null $driver
 * @property-read \App\Models\Payment\DriverWallet|null $driverWallet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\FavouriteLocation> $favouriteLocations
 * @property-read int|null $favourite_locations_count
 * @property-read string $converted_created_at
 * @property-read string $converted_updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\MobileOtp|null $otp
 * @property-read \App\Models\Admin\Owner|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Request\Request> $requestDetail
 * @property-read int|null $request_detail_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Access\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Passport\Token> $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\Admin\UserDetails|null $userDetails
 * @property-read \App\Models\Payment\UserWallet|null $userWallet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\UserWalletHistory> $userWalletHistory
 * @property-read int|null $user_wallet_history_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payment\WalletWithdrawalRequest> $withdrawalRequestsHistory
 * @property-read int|null $withdrawal_requests_history_count
 * @method static \Illuminate\Database\Eloquent\Builder|User active()
 * @method static \Illuminate\Database\Eloquent\Builder|User belongsToRole(...$roleSlugs)
 * @method static \Illuminate\Database\Eloquent\Builder|User companyKey()
 * @method static \Illuminate\Database\Eloquent\Builder|User doesNotBelongToRole(...$roleSlugs)
 * @method static \Illuminate\Database\Eloquent\Builder|User inactive()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereApnToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailConfirmationToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFcmToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastKnownIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLoginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLoginBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNoOfRatings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRatingTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReferredBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRefferalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialAvatarOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialExpiresIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocialTokenSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent implements \App\Base\Services\OTP\CanSendOTPContract {}
}


<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
//            [
//                'name' => 'role-list',
//                'display_name' => 'Display Role Listing',
//                'description' => 'See only Listing Of Role'
//            ],
//            [
//                'name' => 'role-create',
//                'display_name' => 'Create Role',
//                'description' => 'Create New Role'
//            ],
//            [
//                'name' => 'role-edit',
//                'display_name' => 'Edit Role',
//                'description' => 'Edit Role'
//            ],
//            [
//                'name' => 'role-delete',
//                'display_name' => 'Delete Role',
//                'description' => 'Delete Role'
//            ]
//            ,
//            [
//                'name' => 'user-list',
//                'display_name' => 'Display User Listing',
//                'description' => 'See only Listing Of User'
//            ],
//            [
//                'name' => 'user-create',
//                'display_name' => 'Create User',
//                'description' => 'Create New User'
//            ],
//            [
//                'name' => 'user-edit',
//                'display_name' => 'Edit User',
//                'description' => 'Edit User'
//            ],
//            [
//                'name' => 'user-delete',
//                'display_name' => 'Delete User',
//                'description' => 'Delete User'
//            ]
//            [
//                'name' => 'diadiem-list',
//                'display_name' => 'Display Địa Điểm Listing',
//                'description' => 'See only Listing Of User'
//            ],
//            [
//                'name' => 'diadiem-create',
//                'display_name' => 'Create Địa Điểm ',
//                'description' => 'Create New Địa Điểm '
//            ],
//            [
//                'name' => 'diadiem-edit',
//                'display_name' => 'Edit Địa Điểm ',
//                'description' => 'Edit Địa Điểm '
//            ],
//            [
//                'name' => 'diadiem-delete',
//                'display_name' => 'Delete Địa Điểm ',
//                'description' => 'Delete Địa Điểm '
//            ]
//            [
//                'name' => 'dichvu-list',
//                'display_name' => 'Display Dịch Vụ Listing',
//                'description' => 'See only Listing Of Dịch Vụ'
//            ],
//            [
//                'name' => 'dichvu-create',
//                'display_name' => 'Create Dịch Vụ ',
//                'description' => 'Create New Dịch Vụ '
//            ],
//            [
//                'name' => 'dichvu-edit',
//                'display_name' => 'Edit Dịch Vụ ',
//                'description' => 'Edit Dịch Vụ '
//            ],
//            [
//                'name' => 'dichvu-delete',
//                'display_name' => 'Delete Dịch Vụ ',
//                'description' => 'Delete Dịch Vụ '
//            ]
//            [
//                'name' => 'album-list',
//                'display_name' => 'Display Album Listing',
//                'description' => 'See only Listing Of Album'
//            ],
//            [
//                'name' => 'album-create',
//                'display_name' => 'Create Album ',
//                'description' => 'Create New Album '
//            ],
//            [
//                'name' => 'album-edit',
//                'display_name' => 'Edit Album ',
//                'description' => 'Edit Album '
//            ],
//            [
//                'name' => 'album-delete',
//                'display_name' => 'Delete Album ',
//                'description' => 'Delete Album '
//            ]
//            [
//                'name' => 'phukien-list',
//                'display_name' => 'Display Phụ Kiện Listing',
//                'description' => 'See only Listing Of Phụ Kiện'
//            ],
//            [
//                'name' => 'phukien-create',
//                'display_name' => 'Create Phụ Kiện ',
//                'description' => 'Create New Phụ Kiện '
//            ],
//            [
//                'name' => 'phukien-edit',
//                'display_name' => 'Edit Phụ Kiện ',
//                'description' => 'Edit Phụ Kiện '
//            ],
//            [
//                'name' => 'phukien-delete',
//                'display_name' => 'Delete Phụ Kiện ',
//                'description' => 'Delete Phụ Kiện '
//            ]
            [
                'name' => 'slider-list',
                'display_name' => 'Display Slider Listing',
                'description' => 'See only Slider Of Role'
            ],
            [
                'name' => 'slider-create',
                'display_name' => 'Create Slider',
                'description' => 'Create New Slider'
            ],
            [
                'name' => 'slider-edit',
                'display_name' => 'Edit Slider',
                'description' => 'Edit Slider'
            ],
            [
                'name' => 'slider-delete',
                'display_name' => 'Delete Slider',
                'description' => 'Delete Slider'
            ]

        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }

    }
}

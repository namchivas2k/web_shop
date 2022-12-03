<?php

/**
 * Fake products
 */


//Function formatr number to money (VND)
function formatVND($dollars)
{
    return number_format($dollars, 0, '', ',') . "đ";
}


$category = [
    [
        'name' => "Quần áo",
        'id' => 1
    ],
    [
        'name' => "Giày dép",
        'id' => 2
    ],
    [
        'name' => "Mỹ phẩm",
        'id' => 3
    ]
];


$quanAo = [
    //Quan ao
    'cate_id' => 1,
    'cate_name' => 'Quần áo',
    'list_products' => [
        [
            'id' => 111,
            'name' => 'Áo khoác nỉ bomber nam nữ',
            'price' => 110000,
            'stock' => 30,
            'image' => 'https://cf.shopee.vn/file/sg-11134201-22110-r4clhpc33dkv9b',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 112,
            'name' => 'Áo thun nam nữ, áo phông nam nữ unisex',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://cf.shopee.vn/file/sg-11134201-22110-qfmw00tw74jv3c',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 113,
            'name' => 'Bộ quần áo thun',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/22/93/7b/009f028cd89c9537bb0ee8ca507b9037.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'dsdsfsd'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'grtyreg'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'ertetser'
                ],
            ]
        ],
        [
            'id' => 114,
            'name' => 'Bộ quần áo thể thao nam nữ in Hold Right',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/c8/49/93/af74750d0d3ca1bf7a5761c1572d8143.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 115,
            'name' => 'Bộ đồ nam y hình, vải êm, mát, không ra màu, không đổ lông',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/e0/d0/c3/91e4077fd51d32a98087b40138c73f6c.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 116,
            'name' => 'Đồ bộ nam nữ chữ A chất vải thun lạnh in chuyển nhiệt co giãn 4 chiều',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/60/7c/33/a38f9512bdde8ed473d8997c9e4416e0.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 117,
            'name' => 'Quần Âu Nam Cạp Cao 2 Khuy Kiểu mới - Phong cách Hàn Quốc - Dáng ôm - Form chuẩn',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/18/55/7e/09b894354170d363c249e13627350cdd.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 118,
            'name' => 'Quần tây nam Hàn Quốc ống côn công sở cao cấp Hamino ',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/f6/11/02/0aba151cdd7d45f0b21b237670b5f922.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 118,
            'name' => 'Áo sơ mi nam trơn tay dài cao cấp Lados - 779 chất kate lụa mềm mát, thấm hút mồ hôi',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/48/aa/f9/c6233b9cf5225a8c2e8dd4513377587c.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 119,
            'name' => 'Áo Sơ Mi Nam Trắng Dài tay Cổ bẻ Chất Lụa Trơn Truyền Thống không nhăn, thoáng mát',
            'price' => 180000,
            'stock' => 30,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/89/fd/aa/d5f855c28d75bb01c6d3e894569d986f.jpeg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ]
    ],
];


$giayDep = [
    //Quan ao
    'cate_id' => 2,
    'cate_name' => 'Giày Dép',
    'list_products' => [
        [
            'id' => 221,
            'name' => 'Giày Đá Bóng Sân Cỏ Nhân Tạo Prowin S50 Đen - Gian hàng Chính Hãng',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/3c/07/a8/5a721527c31769a0f4a5ad6413439274.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 222,
            'name' => 'Giày bóng đá 3 sọc iWin chính hãng',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/34/b0/c9/1bcf8bd49c749ffd97f41236be6446a4.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 223,
            'name' => 'Giày Bóng Đá Akka Control 3 TF',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/1f/67/49/f11d2755022497a8f44b8d3fccb1365f.png.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 224,
            'name' => 'Giày thể thao nam Anta Super Flexi 812237788-1',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/280x280/ts/product/62/7e/57/6f95428f2907a3aef6ab9096614e277e.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 225,
            'name' => 'Giày chạy thể thao nam nữ Running Shoes Anta 812245588',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/55/5e/ef/38278979f15ef65644c296115ecfb43d.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 226,
            'name' => 'Giày chạy bộ thể thao nam Anta Running FLASHLITE 4.0 812225541',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/30/14/6e/fb65affd63ac4ed9b264b3bf0d77056e.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 227,
            'name' => 'Giày Thể Thao Nam MENDO - Giày Sneaker Màu Đen, Giày Thể Thao Giúp Tăng Chiều Cao Nam Nữ - G5361',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/09/f6/95/aa6cb8e9f6208d3ab8fd17c6b8eb52d6.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 228,
            'name' => 'Giày Sneaker Cặp Đôi Nam Nữ Độn Đế Bánh Mỳ Tăng Chiều Cao',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/e4/6c/70/c5243de9770af9c2a682f7875bcf335e.png.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 229,
            'name' => 'Giày Thể Thao Nam MENDO - Giày Sneaker Đen Xanh - Đỏ Trắng - Kaki, Đế Phẩy, Êm Chân - G5005',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/f9/b5/68/037f56b1329ab00c3e04e9ff5ba55944.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 230,
            'name' => 'Giày Thể Thao Nam MENDO - Giày Sneaker Màu Đen - Xanh, Giày Nam Đẹp, Phong Cách Trẻ Trung Năng Động - G5461',
            'price' => 25000,
            'stock' => 60,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/b5/fb/52/4929a8f736c351c482bbf07cbf8b0da2.png.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ]
    ],
];



$myPham = [
    //Quan ao
    'cate_id' => 3,
    'cate_name' => 'Mỹ Phẩm',
    'list_products' => [
        [
            'id' => 330,
            'name' => 'Bộ sản phẩm se khít lỗ chân lông đá tro núi lửa innisfree Volcanic Calming Pore Clay Mask Special Set - 131173426x',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/67/e3/16/a182cc28eb062e65c5019b1e279a733a.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 331,
            'name' => 'Kem chống nắng dưỡng da dạng sữa bảo vệ hoàn hảo Anessa Perfect UV Sunscreen Skincare Milk SPF 50+ PA++++ 60ml',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/be/82/04/7ec8822d22ecb4582733ae4a5bdb85bd.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 332,
            'name' => 'Sữa Tắm Lifebuoy Sạch Khuẩn Bảo Vệ Vượt Trội Mạnh Mẽ Chứa Ion Bạc+ Hỗ Trợ Cùng Đề Kháng Da Tự Nhiên Chai 1000G',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/4c/26/94/6d37dba5fa31bb3a1b773bb94087057e.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 333,
            'name' => 'Sữa chống nắng dưỡng da trắng mịn Sunplay Skin Aqua Clear White Limited Editon SPF 50+, PA++++ (25g)',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/media/catalog/producttmp/6c/fb/f3/1c60d4af54ec7ff1372ca3aa0bf7d2f4.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 334,
            'name' => 'Combo 2 Sữa rửa mặt sạch hoàn hảo ẩm mịn tự nhiên với bọt tơ tằm trắng Senka Perfect Whip 120g số 1 Nhật Bản',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/f9/17/b1/1df49f4a718214ebc3eb927763797b7c.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 335,
            'name' => 'Bàn Chải Điện P/S S100 PRO - Công Nghệ Sóng Âm, Chải Sạch Mảng Bám Tới 10X - Xanh Ombre',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/media/catalog/producttmp/d2/c1/a7/eefd88a41ca17eeb9551781b1fa0fa1f.png.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 336,
            'name' => 'Nước tẩy trang Loreal Micellar Water 3-in-1 Refreshing Even For Sensitive Skin',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/19/91/5f/3895e64fe73c0648df4ccffc081dedaa.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 337,
            'name' => 'Dung Dịch Vệ Sinh Phụ Nữ Dịu Nhẹ Hỗ Trợ Trị Viêm Nhiễm, Khử Mùi, Không Gây Khô Rát - Oriss Feminine Hygiene - 150ml',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/9d/16/41/c83ee0d3351336e71859263e35a3fa8c.png.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 338,
            'name' => 'Bàn Chải Đánh Răng Điện Lock&lock ENR346BLK - DC3.7V, Trọng Lượng 235g, Sạc Không Dây - Màu Đen',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/1f/d3/5b/4b5f223f0de4dde9b7425bf40c84ae2a.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
        [
            'id' => 339,
            'name' => 'Bộ Ba Chăm Sóc Tóc Phục Hồi Ngăn Rụng Tóc Tsubaki Gội Xả (490ml/chai) + Xịt Dưỡng Tóc 220ml-95243',
            'price' => 300000,
            'stock' => 12,
            'image' => 'https://salt.tikicdn.com/cache/750x750/ts/product/c2/29/cb/2b84e84099386ce51ad03f8b4e14dc91.jpg.webp',
            'detail' => [
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
                [
                    'key' => 'Chat lieu',
                    'value' => 'Vải'
                ],
            ]
        ],
    ],
];



$products = [];

array_push($products, $quanAo, $giayDep, $myPham);

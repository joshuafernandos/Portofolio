<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Image::create([
            'name' => 'President Model United Nation',
            'slug' => 'president-model-united-nation',
            'directory' => 'img/porto1.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laudantium adipisci a porro tempora qui omnis atque illo quisquam dolore dolorum, repudiandae mollitia minus, quidem alias fugit optio! Labore doloremque soluta sit id cum facilis, unde, est, quis recusandae dolorum temporibus consequatur. Dolore, tempora enim, illum a nostrum dolores provident veritatis quas fugiat esse placeat, nam nobis rerum sequi velit officiis? Doloribus facilis dolorum atque, deleniti beatae nemo aliquid asperiores nisi quaerat aut possimus ad nulla ducimus minus vitae iusto numquam suscipit necessitatibus! Totam veniam id rerum vero quaerat aspernatur! Ea iusto numquam magni porro deserunt? Ipsa alias, itaque commodi iste eaque aperiam debitis saepe sed iusto, labore veniam. Odio harum doloribus nam quae eveniet similique delectus reiciendis eius fugiat aperiam. Illo voluptate explicabo voluptates nihil quae eum maiores quod optio at, inventore magni asperiores corrupti, modi architecto veritatis quidem ipsam. Debitis consequatur amet consequuntur blanditiis qui quas obcaecati deserunt, maxime facilis ducimus quia ipsa iusto quam esse recusandae rem doloribus aliquid. Accusantium modi, aliquam aperiam dolor nisi distinctio quisquam ipsam nihil reiciendis minima velit porro molestias quod doloremque dolore rerum eveniet? Placeat quo, ea molestias ipsum quidem voluptates ut dolorum officia consequuntur ipsa cupiditate laborum laudantium quis assumenda suscipit enim vitae omnis alias consequatur quam reiciendis adipisci corrupti ipsam! Nesciunt omnis nisi incidunt ad beatae sapiente voluptatem, cum debitis ducimus aliquam impedit molestiae eligendi eius vitae, iste placeat rerum alias delectus et consequuntur totam nemo suscipit! Beatae harum deserunt saepe molestiae, repellendus maxime dolorum dolorem minus rem. Saepe, modi.'
        ]);

        Image::create([
            'name' => 'PasarThrift',
            'slug' => 'pasarthrift',
            'directory' => 'img/porto2.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laudantium adipisci a porro tempora qui omnis atque illo quisquam dolore dolorum, repudiandae mollitia minus, quidem alias fugit optio! Labore doloremque soluta sit id cum facilis, unde, est, quis recusandae dolorum temporibus consequatur. Dolore, tempora enim, illum a nostrum dolores provident veritatis quas fugiat esse placeat, nam nobis rerum sequi velit officiis? Doloribus facilis dolorum atque, deleniti beatae nemo aliquid asperiores nisi quaerat aut possimus ad nulla ducimus minus vitae iusto numquam suscipit necessitatibus! Totam veniam id rerum vero quaerat aspernatur! Ea iusto numquam magni porro deserunt? Ipsa alias, itaque commodi iste eaque aperiam debitis saepe sed iusto, labore veniam. Odio harum doloribus nam quae eveniet similique delectus reiciendis eius fugiat aperiam. Illo voluptate explicabo voluptates nihil quae eum maiores quod optio at, inventore magni asperiores corrupti, modi architecto veritatis quidem ipsam. Debitis consequatur amet consequuntur blanditiis qui quas obcaecati deserunt, maxime facilis ducimus quia ipsa iusto quam esse recusandae rem doloribus aliquid. Accusantium modi, aliquam aperiam dolor nisi distinctio quisquam ipsam nihil reiciendis minima velit porro molestias quod doloremque dolore rerum eveniet? Placeat quo, ea molestias ipsum quidem voluptates ut dolorum officia consequuntur ipsa cupiditate laborum laudantium quis assumenda suscipit enim vitae omnis alias consequatur quam reiciendis adipisci corrupti ipsam! Nesciunt omnis nisi incidunt ad beatae sapiente voluptatem, cum debitis ducimus aliquam impedit molestiae eligendi eius vitae, iste placeat rerum alias delectus et consequuntur totam nemo suscipit! Beatae harum deserunt saepe molestiae, repellendus maxime dolorum dolorem minus rem. Saepe, modi.'
        ]);

        Image::create([
            'name' => 'IsiHatimu',
            'slug' => 'isihatimu',
            'directory' => 'img/porto3.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laudantium adipisci a porro tempora qui omnis atque illo quisquam dolore dolorum, repudiandae mollitia minus, quidem alias fugit optio! Labore doloremque soluta sit id cum facilis, unde, est, quis recusandae dolorum temporibus consequatur. Dolore, tempora enim, illum a nostrum dolores provident veritatis quas fugiat esse placeat, nam nobis rerum sequi velit officiis? Doloribus facilis dolorum atque, deleniti beatae nemo aliquid asperiores nisi quaerat aut possimus ad nulla ducimus minus vitae iusto numquam suscipit necessitatibus! Totam veniam id rerum vero quaerat aspernatur! Ea iusto numquam magni porro deserunt? Ipsa alias, itaque commodi iste eaque aperiam debitis saepe sed iusto, labore veniam. Odio harum doloribus nam quae eveniet similique delectus reiciendis eius fugiat aperiam. Illo voluptate explicabo voluptates nihil quae eum maiores quod optio at, inventore magni asperiores corrupti, modi architecto veritatis quidem ipsam. Debitis consequatur amet consequuntur blanditiis qui quas obcaecati deserunt, maxime facilis ducimus quia ipsa iusto quam esse recusandae rem doloribus aliquid. Accusantium modi, aliquam aperiam dolor nisi distinctio quisquam ipsam nihil reiciendis minima velit porro molestias quod doloremque dolore rerum eveniet? Placeat quo, ea molestias ipsum quidem voluptates ut dolorum officia consequuntur ipsa cupiditate laborum laudantium quis assumenda suscipit enim vitae omnis alias consequatur quam reiciendis adipisci corrupti ipsam! Nesciunt omnis nisi incidunt ad beatae sapiente voluptatem, cum debitis ducimus aliquam impedit molestiae eligendi eius vitae, iste placeat rerum alias delectus et consequuntur totam nemo suscipit! Beatae harum deserunt saepe molestiae, repellendus maxime dolorum dolorem minus rem. Saepe, modi.'
        ]);

        Image::create([
            'name' => 'BUS AKAP',
            'slug' => 'busakap',
            'directory' => 'img/porto4.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laudantium adipisci a porro tempora qui omnis atque illo quisquam dolore dolorum, repudiandae mollitia minus, quidem alias fugit optio! Labore doloremque soluta sit id cum facilis, unde, est, quis recusandae dolorum temporibus consequatur. Dolore, tempora enim, illum a nostrum dolores provident veritatis quas fugiat esse placeat, nam nobis rerum sequi velit officiis? Doloribus facilis dolorum atque, deleniti beatae nemo aliquid asperiores nisi quaerat aut possimus ad nulla ducimus minus vitae iusto numquam suscipit necessitatibus! Totam veniam id rerum vero quaerat aspernatur! Ea iusto numquam magni porro deserunt? Ipsa alias, itaque commodi iste eaque aperiam debitis saepe sed iusto, labore veniam. Odio harum doloribus nam quae eveniet similique delectus reiciendis eius fugiat aperiam. Illo voluptate explicabo voluptates nihil quae eum maiores quod optio at, inventore magni asperiores corrupti, modi architecto veritatis quidem ipsam. Debitis consequatur amet consequuntur blanditiis qui quas obcaecati deserunt, maxime facilis ducimus quia ipsa iusto quam esse recusandae rem doloribus aliquid. Accusantium modi, aliquam aperiam dolor nisi distinctio quisquam ipsam nihil reiciendis minima velit porro molestias quod doloremque dolore rerum eveniet? Placeat quo, ea molestias ipsum quidem voluptates ut dolorum officia consequuntur ipsa cupiditate laborum laudantium quis assumenda suscipit enim vitae omnis alias consequatur quam reiciendis adipisci corrupti ipsam! Nesciunt omnis nisi incidunt ad beatae sapiente voluptatem, cum debitis ducimus aliquam impedit molestiae eligendi eius vitae, iste placeat rerum alias delectus et consequuntur totam nemo suscipit! Beatae harum deserunt saepe molestiae, repellendus maxime dolorum dolorem minus rem. Saepe, modi.'
        ]);

        Image::create([
            'name' => 'CozyRoom',
            'slug' => 'cozyroom',
            'directory' => 'img/porto6.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores laudantium adipisci a porro tempora qui omnis atque illo quisquam dolore dolorum, repudiandae mollitia minus, quidem alias fugit optio! Labore doloremque soluta sit id cum facilis, unde, est, quis recusandae dolorum temporibus consequatur. Dolore, tempora enim, illum a nostrum dolores provident veritatis quas fugiat esse placeat, nam nobis rerum sequi velit officiis? Doloribus facilis dolorum atque, deleniti beatae nemo aliquid asperiores nisi quaerat aut possimus ad nulla ducimus minus vitae iusto numquam suscipit necessitatibus! Totam veniam id rerum vero quaerat aspernatur! Ea iusto numquam magni porro deserunt? Ipsa alias, itaque commodi iste eaque aperiam debitis saepe sed iusto, labore veniam. Odio harum doloribus nam quae eveniet similique delectus reiciendis eius fugiat aperiam. Illo voluptate explicabo voluptates nihil quae eum maiores quod optio at, inventore magni asperiores corrupti, modi architecto veritatis quidem ipsam. Debitis consequatur amet consequuntur blanditiis qui quas obcaecati deserunt, maxime facilis ducimus quia ipsa iusto quam esse recusandae rem doloribus aliquid. Accusantium modi, aliquam aperiam dolor nisi distinctio quisquam ipsam nihil reiciendis minima velit porro molestias quod doloremque dolore rerum eveniet? Placeat quo, ea molestias ipsum quidem voluptates ut dolorum officia consequuntur ipsa cupiditate laborum laudantium quis assumenda suscipit enim vitae omnis alias consequatur quam reiciendis adipisci corrupti ipsam! Nesciunt omnis nisi incidunt ad beatae sapiente voluptatem, cum debitis ducimus aliquam impedit molestiae eligendi eius vitae, iste placeat rerum alias delectus et consequuntur totam nemo suscipit! Beatae harum deserunt saepe molestiae, repellendus maxime dolorum dolorem minus rem. Saepe, modi.'
        ]);
    }
}

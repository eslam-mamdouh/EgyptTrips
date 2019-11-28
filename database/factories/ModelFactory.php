<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Slider::class, static function (Faker\Generator $faker) {
    return [
        'image' => "image",
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\TripsDistination::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'slug' => $faker->unique()->slug,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Trip::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text(),
        'price' => $faker->randomFloat,
        'distination_id' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Offer::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text(),
        'slug' => $faker->unique()->slug,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Gallery::class, static function (Faker\Generator $faker) {
    return [
        'slug' => $faker->unique()->slug,
        'distination_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contact::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'subject' => $faker->sentence,
        'comment' => $faker->sentence,
        'reply' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Review::class, static function (Faker\Generator $faker) {
    return [
        'trip' => $faker->sentence,
        'rate' => $faker->randomNumber(5),
        'comment' => $faker->sentence,
        'name' => $faker->firstName,
        'country' => $faker->sentence,
        'message' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Booking::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Booking::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'country' => $faker->sentence,
        'phone' => $faker->sentence,
        'date' => $faker->date(),
        'adults' => $faker->sentence,
        'children' => $faker->sentence,
        'location' => $faker->sentence,
        'created_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Booking::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'country' => $faker->sentence,
        'phone' => $faker->sentence,
        'date' => $faker->date(),
        'trip' => $faker->sentence,
        'adults' => $faker->sentence,
        'children' => $faker->sentence,
        'location' => $faker->sentence,
        'created_at' => $faker->dateTime,
        
        
    ];
});

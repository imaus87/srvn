<?php

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

use function Pest\Laravel\get;

beforeEach(function () {
    $this->seed(DatabaseSeeder::class);
});

it('has a standings page', function () {
    get(route('standings'))->assertOk();
});

it('can select a championship', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

it('can see standings if a championship is selected', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

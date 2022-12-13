<?php

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

use function Pest\Laravel\get;

beforeEach(function () {
    $this->seed(DatabaseSeeder::class);
});

it('loads the drivers page', function () {
    get(route('drivers'))->assertOk();
});

it('shows a list of drivers', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

it('shows a searchbox', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

it('can search for a driver', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

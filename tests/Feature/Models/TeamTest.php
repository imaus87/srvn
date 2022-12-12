<?php

use App\Models\Team;
use App\Models\User;

use function PHPUnit\Framework\assertCount;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a team', function () {
// Arrange
    // from user factory with role
    $teammanager = User::find(1);
    // create from factory
    $team = Team::create([
        'name' => 'Anillusion Racing',
        'teammanager_id' => $teammanager
    ]);
// Act
    $teams = Team::get();
// Assert
    assertCount(1, $teams);

});

test('a user who created a team gets the teammanager role', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('a team can have teammembers', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

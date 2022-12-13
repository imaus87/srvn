<?php

use function Pest\Laravel\get;

it('has registration page', function () {
    get(route('register'))->assertOk();
});

test('a user can register an account', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('a user gets a verification email', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('a user gets forwarded to the verification page', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

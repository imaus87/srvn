<?php

use Laravel\Fortify\Features;
use function Pest\Laravel\get;

it('has verification page', function () {

    if (!Features::enabled(Features::emailVerification())) {
        return $this->markTestSkipped('Email verification not enabled.');
    }

    get(route('verification.notice'))->assertOk();
});

test('email verification screen can be rendered', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('email can be verified', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('email can not verified with invalid hash', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

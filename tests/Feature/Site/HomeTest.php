<?php

use function Pest\Laravel\get;

it('loads the home page', function () {
    get(route('home'))->assertOk();
});

test('the page shows articles', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

test('the callout component is visible', function () {
   // Arrange / Given

   // Act / When

   // Assert / Then

})->skip('Test not written.');

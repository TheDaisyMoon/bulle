<?php

it('shows the home page', function () {
    $this->get(route('home'))->assertStatus(200);
});

it('displays the header nav', function () {
    $this->get(route('home'))->assertSeeInOrder([
        route('home'),
        route('blog'),
        route('association')
    ]);
});

it('displays the footer nav', function () {
    $this->get(route('home'))->assertSeeInOrder([
        route('association'),
        route('authors.index'),
        route('legals'),
    ]);
});

it('displays posts', function () {
    $this->get(route('home'))
        ->assertSeeLivewire(\App\Livewire\LastPosts::class);
});

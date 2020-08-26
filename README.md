# Kirby Kookie (WIP)

Let users accept/reject cookies and display the `<script>` tags in `site/snippets/cookies_accepted.php` conditionally.

Simply insert `<?php snippet('kookie') ?>` and you're good to go.

## Options

```php
# site/config/config.php
return [
  'kookie.color' => '#000000',
  'kookie.background-color' => '#ffffff',
  'kookie.color-accept' => '#ffffff',
  'kookie.background-color-accept' => '#000000',
  'kookie.color-reject' => '#ffffff',
  'kookie.background-color-reject' => '#777777',
  'kookie.text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  'kookie.link' => 'privacy',
  'kookie.linkText' => 'Learn more',
  'kookie.accept' => 'Accept',
  'kookie.reject' => 'Reject',
]

# headless_wp

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

> A minimal WordPress theme for headless installations of wp.

&nbsp;

## Features

- Redirects frontend to Rest api.
- Customizes dashboard and cleans the UI.
- Customizes login page.
- Adds two custom dashboard widgets to guide end-user.

&nbsp;

## Usage

- If you have git installed `git clone` this repository or else download it.

  ```shell
  git clone https://github.com/emanueledancelli/headless_wp
  ```

- Customize email in `/inc/dashboard.php` </br>

  ```php
  if( 'your@email.here' !== $current_user->user_email)
  ```

  This is usually the admin login email who will retain access to the original interface without the UI elements removed.

- Customize widgets body/name in `/inc/widgets.php`

  ```php
  function custom_dashboard_widget_one() {
    echo '
      <p><a href=""></a></p>
      <p><a href=""></a></p>';
  }
  ```

  You can setup a link to provide easy access to the user to the relevan section of the dashboard. </br>

  If you don't want to use the widgets just comment out

  ```php
  require_once 'inc/widgets.php';
  ```

  in `functions.php`.

- Customize error message and url in `/inc/login.php`.

  ```php
  function error_override() {
    return 'your message goes here';
  }
  ```

- Add your custom logo/screenshot.

  `screenshot.png` is the theme screenshot.
  `logo.png` will be displayed on login page.

- Zip and upload to WP

  Installs as a regular theme.

&nbsp;

## Credits

Emanuele Dancelli - emanueledancelli@gmail.com

&nbsp;

## License

[MIT](https://mit-license.org/)

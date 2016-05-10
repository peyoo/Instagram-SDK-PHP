## Instagram-SDK-PHP

This is an unofficial SDK for the Instagram Private API in PHP

## Motivation

I decided to build this because most libraries for the Instagram Private API I have come across aren't OOP based and are difficult to use.

## Donations

If you like this project, please consider donating towards my coffee addiction fund, so I can continue to push commits!

- ![Paypal](https://raw.githubusercontent.com/reek/anti-adblock-killer/gh-pages/images/paypal.png) Paypal: [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JMMKQZYBM2SA8)
- ![btc](https://camo.githubusercontent.com/4bc31b03fc4026aa2f14e09c25c09b81e06d5e71/687474703a2f2f7777772e6d6f6e747265616c626974636f696e2e636f6d2f696d672f66617669636f6e2e69636f) Bitcoin: 1814x9kioBxPDBCQx8oaty7e6Z3DAosucd


## Installation

### Composer

```sh
composer require liamcottle/instagram-sdk-php
```

### Don't have Composer?

What?! Grab it here: [https://getcomposer.org/](https://getcomposer.org/)

## Include

```php
require("../vendor/autoload.php");
$instagram = new \Instagram\Instagram();
```

## Usage

Take a look at the examples below! At this stage, there's no documentation for all the available library methods, however your IDE can help out there, until I get that sorted! (or someone helps me out)

## Examples

More examples can be seen in the [examples](./examples) folder.

### Login

```php
$instagram->login("username", "password");
```

### Follow

```php
$user = $instagram->getUserByUsername("liamcarncottle");
$instagram->followUser($user->getPk());
```

### Get your Timeline

```php
$timelineFeed = $instagram->getTimelineFeed();
```

### Get user Feed

```php
$user = $instagram->getUserByUsername("liamcarncottle");
$userFeed = $instagram->getUserFeed($user->getPk());
```

### Post a Photo

Images that are on the web will need to be saved to a file first.

```php
$instagram->postPhoto("/Users/liamcottle/Desktop/photo.jpg", "Caption");
```

### Use a Proxy

```php
//Set the Proxy and Port
$instagram->setProxy("127.0.0.1:8888");

//Enable/Disable SSL Verification (Testing with Charles Proxy etc)
$instagram->setVerifyPeer(false);

//Login
$instagram->login("username", "password");
```

## What can it do so far?

- Login
- User Feed
- My User Feed
- Timeline Feed
- Liked Feed
- Tag Feed
- Location Feed
- User Tags Feed
- Like Media
- Unlike Media
- Delete Media
- Comment on Media
- Get Comments on Media
- Delete Bulk Comments on Media
- Get User Info
- Get User Followers
- Get User Following
- Get User Map (GeoMedia)
- Get Media Info (Refresh specific Feed Item)
- Get Current User Account
- Edit User Profile
- Set Account Public
- Set Account Private
- Show Friendship
- Create Friendship
- Destroy Friendship
- Block Friendship
- Unblock Friendship
- Search Tags
- Search Users
- Search Places via Facebook
- Change Profile Picture
- Remove Profile Picture
- Upload Photo
- Configure Media (Photo)
- Edit Media
- Logout

## TODO

- Inbox
- Direct Share
- Recent Activity
- Register new Accounts
- Upload and Post Videos

## Contributing

If you would like to contribute to this project, please feel free to submit a pull request.

Before you do, take a look at the issues to see if the functionality you want to contribute to is already in development.

## License

MIT

## Legal

The name "Instagram" is a copyright of Instagram, Inc.

This project is in no way affiliated with, authorized, maintained, sponsored or endorsed by Instagram, Inc or any of its affiliates or subsidiaries.

I, the project owner and creator, am not responsible for any legalities that may arise in the use of this project. Use at your own risk.
TGaaS
=====

**TGaaS** is a new software technology which applies the modern concept of a RESTful API by providing a count of the times you've been caught falling for The Game ~~(just like this sentence did)~~. The returned data can be used for the first time to provide a way to keep track through the lifetime of the PHP session on how much times you fell for it.

### Features
- Full SSL support
- No UTF-8 encoding required
- MIME-compliant types

### Installation
- Install composer for PHP.
- Execute `composer install` on the root of the project.

### Usage
Download the source code and unpack it to any public directory of your server. It doesn't matter which one you choose, relative paths are fully supported!

Once you're done, just point your frontend to your server's URL, it would be something like this: http://localhost

The response body should look like this:

    {
        "session_id": "46ca16a1544fcbb79f3f976a68b57385",
        "count": 8,
        "status": 200
    }

On your frontend, you can keep track of the value returned in `session_id` and pass it as a header on your calls.

This information should be passed inside of the `Set-Cookie` header and, at the same time, inside of an internal value called `PHPSESSID`. Here's an example:

    $.ajax({
        url: 'http://localhost',
        headers: { 'Set-Cookie' : 'PHPSESSID=46ca16a1544fcbb79f3f976a68b57385' }
        ...
    });

### License
This project is licensed under [The Unlicense](LICENSE).
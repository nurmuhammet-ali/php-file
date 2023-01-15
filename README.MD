# Simple file manipulator for PHP
## Motivation?
#### This is one of my first reusable codes when I was in high school working on PHP. There is a small chance that this package can help someone along the way.
### Examples
```php
require __DIR__ . '/vendor/autoload.php';

use Nurmuhammet\File;

# Available methods, see example.php for examples.
File::exists('/path/to/file');
File::size('/path/to/file');
File::name('/path/to/file');
File::extension('/path/to/file');
File::delete('/path/to/file');
File::lastUpdated('/path/to/file');
File::get('/path/to/file');
File::put('/path/to/file', 'Content');
File::append('/path/to/file', 'Content');
File::truncate('/path/to/file');
File::copy('/path/to/file', '/path');
File::move('/path/to/file', '/path');
File::rename('/path/to/file', 'name');
File::download('/path/to/file', 'dir');
File::upload('/path/to/file', 'dir');
```

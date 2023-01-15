# Simple file manipulator for PHP
### Examples
```php
use Avagadro\File;

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
File::download('/path/to/file');
File::upload('/path/to/file');
```

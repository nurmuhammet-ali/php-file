<?php 

if (! File::exists('data.txt')) {
    File::put('data.txt', 'Hello.');
}

echo "<pre> \n";

print '(bool) Exists: ';
var_dump(
    File::exists('data.txt')
);

print '(int) Size: ';
var_dump(
    File::size('data.txt')
);

print '(string) Name: ';
var_dump(
    File::name('data.txt')
);

print '(string) Extension: ';
var_dump(
    File::extension('data.txt')
);

print '(bool) Delete: ';
var_dump(
    File::delete('file-to-delete.txt')
);

print '(int) Last Updated: ';
var_dump(
    File::lastUpdated('data.txt')
);

print '(string) Get content: ';
var_dump(
    File::get('data.txt')
);

print '(int) Erases & puts new content: ';
var_dump(
    File::put('data.txt', "New content \n")
);

print '(int) Passing third argument appends content to file: ';
var_dump(
    File::put('data.txt', "New content appended \n", true)
);

print '(int) Append: ';
var_dump(
    File::append('data.txt', "New content appended by append function \n")
);

print '(bool) Truncates (erases content) file: ';
var_dump(
    File::truncate('data.txt')
);

print '(bool) Copy: ';
var_dump(
    File::copy('data.txt', 'new-directory/')
);

print '(bool) Move: ';
var_dump(
    File::move('new-directory/data.txt', './other-directory/')
);

print '(bool) Rename: ';
var_dump(
    File::rename('data.txt', 'renamed.txt')
);

print '(bool) Download with curl: ';
var_dump(
    File::download('https://raw.githubusercontent.com/nurmuhammet-ali/php-file/main/README.MD', 'downloads/')
);

// print '(bool) Upload file from form: ';
// File::upload('data.txt', 'directory');


echo "</pre> \n";


# check with JSHint
#jshint .
# Run the theme through JavaScript Code Style checker
#jscs .

# WordPress Coding Standards
# @link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
# @link http://pear.php.net/package/PHP_CodeSniffer/
# -p flag: Show progress of the run.
# -s flag: Show sniff codes in all reports.
# -v flag: Print verbose output.
# -n flag: Do not print warnings (shortcut for --warning-severity=0)
# --standard: Use WordPress as the standard.
# --extensions: Only sniff PHP files.
./vendor/bin/phpcs -p -s -n . --standard=./phpcs.xml

# Babyfoot Score Tracker

This is a simple application that allows users to submit the results of a babyfoot (foosball) match, including the names of the players and the final score. The results are then stored in a database and can be viewed at a later time.

## Requirements

- PHP 7.0 or higher
- MySQL database

## Setup

1. Set up a MySQL database and create a table called `babyfoot_results` with the following structure:


```bash
date (datetime)
team_a_player_a (varchar)
team_a_player_b (varchar)
team_b_player_a (varchar)
team_b_player_b (varchar)
score_a (int)
score_b (int)
```
2. Modify the `$servername`, `$username`, `$password`, and `$dbname` variables at the top of `index.php` to match your database credentials.

3. Upload the files to your web server.

## Usage

1. Go to the application's URL in your web browser.
2. Enter the names of the players and the final score of the match, and submit the form.
3. The results will be added to the database and you will be redirected to the `thanks.php` page.
4. To view the results, you can run a SELECT statement on the `babyfoot_results` table in your database.

## Troubleshooting

If you encounter any issues, you can check the error logs on your web server or try adding the following lines at the top of `index.php` to enable error reporting:

```bash
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```

## License

This application is available under the MIT License. See the [LICENSE](LICENSE) file for more information.

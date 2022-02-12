<p align="center"><img src="https://brokerchooser.com/images/logo@2x.png" width="400"></p>

## BrokerChooser homework description

This Laravel-based project contains a simple one-page website that aims to present some data about various brokers.

### What's already done

A class containing some fictional broker information is available under the `app/Repositories/BrokerRepository.php` class.
This class returns the entire data set that you will need to work on.

The webpage's look is ready and is filled with some dummy information.

### Your task
Your task consists of two parts: The first is to present the actual data on the webpage, which needs to be categorized into 3 sections:

1. A list of the top 3 brokers of 2020 based on overall score (in descending order).
2. A list of all the stock brokers ordered by overall score (in descending order).
3. A list of brokers with no inactivity fee ordered by overall score (in descending order).

Your second task is to create an HTTP GET API endpoint that returns a single, randomly chosen broker's data in JSON format.

### Some hints

* Try to rely on Laravel specific solutions instead of pure PHP. Check out the <a href="https://laravel.com/docs/8.x/">Laravel documentation</a> for help.
* The <a href="https://laracasts.com/series/laravel-8-from-scratch">Laravel course found at Laracasts</a> can help you in various topics related to Laravel. Of course, we do not expect you to watch the entire course, we just think it might be useful in case you need help. It is entirely optional.

### Setting up the project for Ubuntu/MacOS users

1. Install Docker
2. Create the `.env` environment file by copying the `.env.example` file.
   
Run the following commands from the project's root directory:
1. `docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php80-composer:latest composer install --ignore-platform-reqs && php artisan key:generate`
2. `./vendor/bin/sail up`

The application will be available on http://localhost:80.

### Setting up the project for Windows users

1. Install Docker Desktop and enable WSL2.
2. Add the Ubuntu 20.04 LTS from the Microsoft Store.
3. Enable WSL integration in Docker Desktop: Settings > Resources > WSL integration. Enable it for Ubuntu 20.04.
4. Open a new Ubuntu 20.04 terminal

Run the following commands:
1. `sudo apt install software-properties-common`
2. `sudo add-apt-repository ppa:ondrej/php`
3. `sudo apt update`
4. `sudo apt install php8.0`
5. `sudo usermod -aG docker ${USER}`
6. `su - ${USER}`
7. `explorer.exe .`

Copy in the unzipped project folder, and create the `.env` environment file by copying the `.env.example` file.

8. `cd <project-folder-name>`
9. `docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php80-composer:latest composer install --ignore-platform-reqs && php artisan key:generate`
10. `php artisan serve`

The application will be available on http://localhost:8000.

### Submitting your solution

Please submit your solution in a private Git repository, with your changes clearly separated from the starting code using commits.

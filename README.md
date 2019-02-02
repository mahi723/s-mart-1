# S-Mart Company Build
This project is the Capstone project for CSCC created by:
Aaron Owens
Derek Will
Thomas Robinson
Mark Lerner
Mahindra Adhikarri
Purvik Patel

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### What is Needed to Run project

Xampp
MySQL Workbench
Git (Git Bash) from https://git-scm.com/download/

### Installing and Testing Xampp

1. Start by downloading and installing the Xampp from https://www.apachefriends.org

```
Click on the 'Download' button for 'XAMPP for Windows (PHP 7.3.1)'

Install after download using default features / settings
```

2. Test Xampp setup

```
Run Xampp from start menu

In the dialog box that opens, click 'Run' next to the Apache (server) option

Open a web browser and enter your local IP address (usually 127.0.0.1) verifying the Xampp dashboard appears
```

### Installing Git (Git Bash)

1. Start by downloading Git from https://git-scm.com/download/

```
Click the 'Windows' link under the 'Downloads' header

After the download completes, install using default settings
```

2. Run Git Bash, the command line tool

```
In the start menu, navigate to the 'Git' folder

Click on the 'Git Bash' application
```

3. Navigate to the htdocs folder of Xampp. If everything was installed by default using the C:/ drive, you will 'cd' (change directory) by entering:

```
cd c:/xampp/htdocs
```

4. Clone the S-Mart repo to the htdocs folder by using this command

```
git clone https://github.com/dwilldev/s-mart.git
```

5. After cloning is complete, use a web browser to open the website

```
visit your local server again (with Apache turned on in Xampp) at 127.0.0.1/s-mart
```

### Installing and Connecting MySQL Workbench

1. Start by installing MySQL Workbench from https://www.mysql.com/products/workbench

```
Click the 'Download Now' button towards the middle of the page

After next page loads, scroll to near the bottom and click the 'Download' button for the 'Windows (x86, 64-bit), MSI Installer'
(you should also see a reference to 'community' version under the download name)

Another page should load asking you to Sign Up or Login... there is the option to 'just start my download', choose it

After the download completes, install the program using default features / settings
```

## Deployment

1. Fetch current master

2. Commit changes

3. Stage changes

4. Push changes
```
Navigate to local host/*repo folder*
```

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

There will be no outside contributions to this project being a private repo.

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

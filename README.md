# 2021 Escape room
A simple docker application for learning SQL Injection built around an escape room.

## Introduction

This is a simple docker application using Ubuntu 16.04 xenial, apache2 httpd (2.4), php (7.0) and mariadb (10), a classical LAMP stack, to
create a vulnerable web application - Vulnerable Mama Shop. Vulnerable Mama Shop is insecurely coded and has a simple SQL injection flaw. It can be used to learn and practice SQL injection. 

## Disclaimer and Warning

Computer misuse is a serious crime in Singapore and other countries, punishable by law. The source code and instructions provided here are for educational purposes only; meant to help IT defenders understand about SQL Injection vulnerabilities and better defend their systems and applications. It should not be misused for any other purposes. 

The 2021 escaoe room is an insecure application and should not be exposed on the internet or an internal network. Doing so can result in a system or network compromise. It should only be used in an isolated test lab environment that is meant for security testing and learning. escaperoom2021 is released under the MIT license. Read the license, the author is not responsible for any damage direct or indirect that arise from using VMS. Use VMS solely at your own risk !

## Installation

The application is packaged as a Docker application. Clone and download a copy for the application

    git clone https://github.com/golucky5/escaperoom2021.git

Change into the directory and build using docker

    cd escaperoom2021
    docker build -t escaperoom2021 .

## Running the Docker Application

To run it interactively

    docker run -it --rm -p 8000:80 golucky5/escaperoom2021

This will make escaperoom2021 available at http://localhost:8000 or http://[ip address]:8000

Do not expose escaperoom2021 to the internet, it is an insecure application and can lead to a system or network compromise. 
Use it in an isolated test lab environment meant for security testing and learning. 
 
To run escaperoom2021 in detached mode

    docker run -d --rm -p 8000:80  golucky5/escaperoom2021
    
Note the mariadb database is restored each time the docker container is started up.     

## Finding the SQL Injection Flaw

A intercepting proxy like OWASP ZAP or Blurpsuite can be used to inspect and alter the traffic between the browser and escaperoom2021. 
escaperoom2021 is deliberately kept simple, it should be relatively easy to find the SQL injection flaw. 

See if you can dump out the list of customers in Mama Shop. To gain the most understanding, it is advised that the user 
do this systematically, step by step. Find out where the SQL vulnerability is and proceed to gather information on the database. 
and finally dump out the customer list. 

## Source signature
Gpg Signed commits are used for committing the source files. 






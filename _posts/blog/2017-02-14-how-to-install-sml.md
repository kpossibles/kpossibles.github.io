---
layout: post
title: "How to install SML on your Mac OSX"
modified:
categories: blog
excerpt: "Installing SML through Homebrew is super easy!"
tags: [learning]
image:
feature:
date: 2017-02-14T22:48:22-06:00
---

I am taking Programming Language Concepts at UWM this semester (CS 431), which covers functional programming with ML and Scala. I needed to install it on my Macbook Pro, and SML seemed old enough to have a Homebrew command. Honestly, copy & paste the commands below into the Terminal and you'll be set! Installing SML through Homebrew is super easy!!!

[Original Instructions](http://islovely.co/posts/painless-installation-of-sml-on-os-x/)

### Have Homebrew installed

    ruby <(curl -fsSk https://raw.github.com/mxcl/homebrew/go)

### Double-check that it's updated if already installed

    $ brew update

### Install SML through Homebrew

    $ brew install smlnj

### Update your PATH
Open your bash profile

    $ open -t ~/.bash_profile

Add an export PATH-directive to this file:

    export PATH=/usr/local/Cellar/smlnj/110.74/libexec/bin:$PATH

Reload your profile

    $ source ~/.bash_profile

# PROFIT?!!!
Type sml into the Terminal to get started!

    $ sml

![hooray ya did it!!!](https://media.giphy.com/media/sY6DRXWTn9a2k/giphy.gif)
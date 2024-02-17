<br/>
<p align="center">
  <h3 align="center">Updated && improved fork of ts3admin.class (TS3/TS5)</h3>

  <p align="center">
    During development! The project created by Stefan Zehnpfennig, with subsequent updates contributed by the community, remained archived by the author. This class adds advanced functionality and provides a solution for the lack of all Query protocol events, which speeds up the bot's performance.
    <br/>
    <br/>
    <a href="https://github.com/mskarbek48/ts3admin.class/issues">Report Bug</a>
    .
    <a href="https://github.com/mskarbek48/ts3admin.class/issues">Request Feature</a>
  </p>
</p>

![Downloads](https://img.shields.io/github/downloads/mskarbek48/ts3admin.class/total) ![Contributors](https://img.shields.io/github/contributors/mskarbek48/ts3admin.class?color=dark-green) ![Issues](https://img.shields.io/github/issues/mskarbek48/ts3admin.class) ![License](https://img.shields.io/github/license/mskarbek48/ts3admin.class)

## Table Of Contents

* [About the Project](#about-the-project)
* [Roadmap](#roadmap)
* [License](#license)

## About The Project

The fork of this project was created to update its functionality and add missing elements, currently undergoing testing. What has changed?

* FULLY WORKING EVENTS!
* Full compatibility with PHP 8.0+
* New eventListener function under testing
* New logEventListener function in progress
* New missing commands: servernotifyregister, apikeyadd, apikeydel, queryloginlist, etc.
* The executeCommand function has been modified to handle events correctly.
* Protection against 100% CPU usage, which occurred in the original version
* clientDbList, clientFind functions with new ts5 params
* The loadQueryData function no longer retrieves unnecessary client lists.
* Functions from TS5 have been added, currently in progress: homebaseisset, homebaselist, homebaseset, licensesignmessage, authenticationtoken, banfind, chatlogintoken, ftgetchannelfilehttptoken, homebasedel

## Roadmap

See the [open issues](https://github.com/mskarbek48/ts3admin.class/issues) for a list of proposed features (and known issues).

## License

Distributed under the MIT License. See [LICENSE](https://github.com/mskarbek48/ts3admin.class/blob/main/LICENSE.md) for more information.

# Bulk URL Shortening - a YOURLS plugin

Plugin for [YOURLS](http://yourls.org)

* Plugin URI:       [github.com/tdakanalis/bulk_api_bulkshortener](https://github.com/tdakanalis/bulk_api_bulkshortener)
* Description:      A YOURLS plugin allowing the shortening of multiple URLs with one API request.
* Version:          1.0
* Release date:     2015-07-22
* Author:           Stelios Mavromichalis
* Author URI:       [http://www.cytech.gr](http://www.cytech.gr)

## Installation

1. In `/user/plugins`, create a new folder named `bulk-shortener`.
2. Drop these files in that directory.

## Use

1. Add in your api request the parameter `action=bulkshortener`
2. Send the list of the URLs to be shortened using the parameter `urls[]`.
3. The response contains each shortened URL in a single line.

## Example
Request: 
* http://host:port/yourls-api.php?username=u&password=p&action=bulkshortener&urls[]=http://url1&urls[]=http://url2

Response:
* http://s.com/zy1071
* http://s.com/ha52ql

## History

* 2015-07-22, v1.0: Initial version.

## Finally...

I hope you find this plugin useful.

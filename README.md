# RSSClient plugin for Craft CMS 3.x

Just a simple RSS client

## Installation

To install RSSClient, follow these steps:

1. Download & unzip the file and place the `rssclient` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/venveo/craft3-RSSFeed` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `rssclient` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

RSSClient works on Craft 3.x.

## Using RSSClient
This plugin exposes a service variable called `rssfeed` with a function called `getFeed` that will retrieve data from a valid RSS feed and allow you to use it in a template.

####Example:
```
{% set feed = craft.rssclient.getFeed('http://feeds.feedburner.com/jumbojoke') %}
{% set jokes = feed %}

{% for joke in jokes %}
    <strong>{{ joke.title }}</strong>
    {{ joke.summary | raw }}
{% endfor %}
```

## Todo
- Caching mechanism to prevent extraneous http requests from Guzzle
- Synchronizing with entry type via channel
- Cleaner/easier pagination
- More comprehensive error logging

## Contributing
Contributions are encouraged, please ensure your commits are descriptive and start with a verb. Create a pull-request of your feature branch onto the master branch. When your PR is approved and merged, a Venveo team member will tag, update the changelog, and create a new release.

## Credits
[mattstein](https://github.com/mattstein) for his original [Craft 2 implementation](https://github.com/workingconcept/craft-feeder) which this project follows very closely.

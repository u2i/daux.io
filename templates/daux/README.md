# Daux theme information

This theme is the default theme that Daux.io ships with.

It comes with 4 standard colour configurations as well as the ability to specify custom colours through a simple config file change.

# Using this theme

To use the Daux theme, set the "theme" option in your /doc/config.json file to "daux"

    {
        "theme": "daux"
    }

# Choosing a colour scheme

The default colour scheme is navy. This can be changed to one of five options: navy, green, red, blue, and custom by setting "daux_theme" in config.json.

	{
		"daux_theme": "green",
	}

# Customizing colors.

To customize the daux theme with your own colors, set the daux_theme config variable to "custom", and add an array of elements with their color codes as shown here:

	{
		"daux_theme": "custom",
		"daux_colors": {
        	"sidebar-background": "#f7f7f7",
        	"sidebar-hover": "#c5c5cb",
        	"lines": "#e7e7e9",
        	"dark": "#3f4657",
        	"light": "#82becd",
        	"text": "#2d2d2d",
        	"syntax-string": "#022e99",
        	"syntax-comment": "#84989b",
        	"syntax-number": "#2f9b92",
        	"syntax-label": "#840d7a"
        }
    }


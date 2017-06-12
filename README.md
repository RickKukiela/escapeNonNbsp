escapeNonNbsp (Craft CMS 2.5.x Twig Extension)
================================================

# Why does this exist?

This plugin was created to handle a conundrum I experienced working with designers that wanted to control the way
text breaks on their layouts by using &amp;nbsp; in the fields they are editing. To accommodate this I initially
started filtering all field output with |raw which would render the &amp;nbsp; as-is, however then single ampersands
were being rendered as is, along with any other character that would otherwise be converted to an html entity. This
plugin was created to combat that issue.

# What does it do, exactly?
In a nutshell, it renders the text exactly as if you did `{{ 'some text'|escape('html') }}` except it takes the
output from that and replaces &amp;amp;nbsp; with regular old &amp;nbsp; before returning the string to the view.

# Install Instructions
1. Clone or download the zip.
2. Place the "escapenonnbsp" folder inside your craft/plugins directory.
3. Go to admin / settings / plugins.
4. Install The plugin.

# How to use

Inside your twig templates, just use it like any other filter
```
{% set test = "Some Raw text & characters but&nbsp;with&nbsp;non&nbsp;breaking&nbsp;space!"; %}
{{ test|escapeNonNbsp }}
```

The above will output:
```
Some Raw text &amp; characters but&nbsp;with&nbsp;non&nbsp;breaking&nbsp;space!
```
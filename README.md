# Buto-Plugin-FollowUs

<p>Add follow-us-links. Just set icon and href for any page.</p>

<a name="key_0"></a>

## Settings



<a name="key_1"></a>

## Usage



<a name="key_2"></a>

## Pages



<a name="key_3"></a>

## Widgets



<a name="key_3_0"></a>

### widget_section

<p>Add widget in a bootstrap container. Use icons from plugin icons/bootstrap_v1_8_1 and href to any page.</p>
<pre><code>type: div
attribute:
  class: container
innerHTML:
  -
    type: widget
    data:
      plugin: follow/us
      method: section
      data:
        links:
          -
            icon: facebook
            href: (Link to my facebook)
          -
            icon: twitter
            href: (Link to my twitter)</code></pre>

<a name="key_4"></a>

## Event



<a name="key_5"></a>

## Construct



<a name="key_6"></a>

## Methods




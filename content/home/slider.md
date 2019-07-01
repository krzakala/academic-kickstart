+++
# Slider widget.
widget = "slider"  # See https://sourcethemes.com/academic/docs/page-builder/
headless = true  # This file represents a page section.
active = true  # Activate this widget? true/false
weight = 20  # Order that this section will appear.

# Slide interval.
# Use `false` to disable animation or enter a time in ms, e.g. `5000` (5s).
interval = 5000

# Slide height (optional).
# E.g. `500px` for 500 pixels or `calc(100vh - 70px)` for full screen.
height = "500"

# Slides.
# Duplicate an `[[item]]` block to add more slides.
[[item]]
  title = "Some recent talks online"
  content = "Click here for the youtube channel, or browse with the arrows"
  align = "center"  # Choose `center`, `left`, or `right`.

  # Overlay a color or image (optional).
  #   Deactivate an option by commenting out the line, prefixing it with `#`.
  overlay_color = "#666"  # An HTML color value.
  overlay_img = "flolecture.jpg"  # Image path relative to your `static/img/` folder.
  overlay_filter = 0.5  # Darken the image. Value in range 0-1.

  # Call to action button (optional).
  #   Activate the button by specifying a URL and button label below.
  #   Deactivate by commenting out parameters, prefixing lines with `#`.
  cta_label = "Youtube Channel"
  cta_url = "https://www.youtube.com/playlist?list=PLvKBgJ4p0p3yNIJfnNx0BA4EKAHg3eOT-"
  cta_icon_pack = "fas"
  cta_icon = "graduation-cap"

[[item]]
  title = "Statistical Physics and Machine Learning: Old ideas for new problems"
  content = "KITP Conference: At the Crossroad of Physics and Machine Learning"
  align = "center"

  overlay_color = "#555"  # An HTML color value.
  overlay_img = "kitptalk.jpg"  # Image path relative to your `static/img/` folder.
  overlay_filter = 0.5  # Darken the image. Value in range 0-1.
  
  cta_label = "Watch talk"
  cta_url = "http://online.kitp.ucsb.edu/online/machine_c19/krzakala/"
  cta_icon_pack = "fas"
  cta_icon = "graduation-cap"

[[item]]
  title = "Selected review of 30 years of physics research on artificial neural networks"
  content = "KITP Conference: The Rough High-Dimensional Landscape Problem"
  align = "center"

  overlay_color = "#555"  # An HTML color value.
  overlay_img = "kitptalk.jpg"  # Image path relative to your `static/img/` folder.
  overlay_filter = 0.5  # Darken the image. Value in range 0-1.
  
  cta_label = "Watch talk"
  cta_url = "http://online.kitp.ucsb.edu/online/machine_c19/krzakala/"
  cta_icon_pack = "fas"
  cta_icon = "graduation-cap"
+++

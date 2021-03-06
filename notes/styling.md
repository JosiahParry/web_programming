# CSS: cascading style sheets

- You can use inline styling (nono).
- Use  `<em>` and `<strong>`, not `<b>` or `<i>`
- Font can be added as an attribute to the html doc
  - Don't do this. Use CSS. This is not **semantic**

The preferred method of styling is by creating a `.css` file. This will be linked to our *html* document. Linking can be used by `<link href=style.css type="text/css" rel="stylesheet" />`. Style sheets are layered.
  - least important
  - more important
  - most important

## Syntax

  ```
  selector{
    property: value;
    ...
  }
```
**Example**
```
p {
  font-family: sans-serif;
  color: red;
}
```

### CSS properties for colors
  - color
      - can used name colors: aqua, black, blue, etc.
      - **rbg** codes. Use 3 values from 0-255.
      - **hexcodes** (this is the best method) values in base-16 from 00 (0, none) to FF (255, full).

```
p{ color: red;}
h1 {color: #FF8800;}
```
### CSS properties for fonts
- `font-family`: which font will be used
  - always end with either "Serif" or "Sans-serif"
  - `@font-face`: connect to a font file to your page.
    - requires `font-family` and `src`
- `font-size`:  how large the letters will be drawn
  - can be specified using pixels, points, and m-size (the width of the master font)
- `font-style`: enable / disable italics (set to normal for none or italics for italics)
- `font-weight`: boldness etc (set to normal for none or bold for bold)

If a font has more than 1 word, use `"Font Name"`. Always end with a semi-colon (;).

Can comment using `/*...*/`.

#### Grouping styles
```
p, h1, h2 {
  color:green;
}
h2 {
  background-color: yellow;
}
```

### CSS properties for text

- `text-align`: align of text (center, left, right, justify)
- `text-decoration`: incorporate `overline, line-through underneath`
- `line-height`: gaps between lines
- `word-spacing`
- `letter-spacing`
- `text-indent`: auto indents the first letter of each paragraph

### CSS properties for backgrounds
- `background-color`: color to fill background
- `background-image`: image to place in the background
  - `background-position`: positions background image
  - `background-repeat`: repeats image

```
body {
  background-image: url("image.jpg");
  background-repeat: repeat-x;
  background-position: 370px 20px; /* x,y coords */
}
```

### CSS properties for text
- `list-style-type`
  -  lower-roman, upper-roman, lower-alpha, upper-alpha, etc.

### CSS properties for tables

All standard CSS styles can be applied to a table, row, or cell.

- `border-collapse`: merges 2 default borders to 1.

```
table{
  border: width style color;
  caption-side: bottom;
}
```
- `rowspan` & `colspan` determines how many cells are taken up

```
<tr><td colspan="2"></tr>
```
- `col` tag can be used to define styles that apply to an entire column (self-closing)
  - `class` attribute
- `colgroup` tag applies a style to a group of columns (**NOT** self-closing)
  - `class`, `span` attributes

Tables used to be use for positioning. Borderless tables appear to be an easy way to achieve grid like pages, but HOW ABOUT NOOOOOOOOO. Thats what CSS is for. Tables have their own semantics, but should only be used for tabular data, etc.

We can use `div` etc. for layout, and CSS

### New CSS 3 features
- Rounded corners, opacity, color gradients, shadows, animations, transformations (rotation, skew, etc).
- `nth-child`, allows you to target every **nth** element. i.e. I want to target every other row.

## Body styles

Body styles cascade through the entire document. Semantically, the body should contain everything that will be visible on the page, using the `<body>` tag in your HTML.

When styles conflict, the latter one overrides.

```
body {
  font-size: 16px;
  background-color: yellow;
}
```

## CSS classes

Can create ID's with the `id` attribute within an HTML tag. IDs can be targeted using the `#`.
  - i.e. `#id`

Can create classes within HTML by using the `class` attribute within a tag. Classes are assigned like: `<h2 class="urgent">Title_2</h2>`.

Classes are targeted within CSS by placing a period before the class name.
```
.class_name {
  font-family: sans-serif;
}
```
You can assign multiple classes by separating class names with a space.
  - `<h2 class="class_1 class_2"> Title 2 </h>`

*IDs* should be used to identify a single tag or item etc., whereas *classes* should be used to target a group of items.

## Positioning

- `position`:
  - `static`
  - `relative` offset from its normal static position
  - `absolute`: a fixed position within it's containing element
  - `fixed`: a fixed position within the browser window

Ex:
```
#menubar {
  position: absolute;
  left: 400px
  top: 50px;
}
```

Layout an element using *alignment* if possible. `text-align` and `vertical-align` is used for block level elements.

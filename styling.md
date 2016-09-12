##CSS: cascading style sheets

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
- `font-style`: enable / disable italics etc
- `font-weight`: boldness etc

If a font has more than 1 word, use `"Font Name"`. Always end with a semi-colon (;).

### CSS p

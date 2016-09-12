##CSS: cascading style sheets

- You can use inline styling (nono).
- Use  `<em>` and `<strong>`, not `<b>` or `<i>`
- Font can be added as an attribute to the html doc
  - Don't do this. Use CSS. This is not **semantic**

The preferred method of styling is by creating a `.css` file. This will be linked to our *html* document. Linking can be used by `<link href=style.css type="text/css" rel="stylesheet" />`. Style sheets are layered.
  - least important
  - more important
  - most important

  ### Syntax

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

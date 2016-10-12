# Layout Using CSS

The **ID** attribute and **classes** will be integral. The use of IDs can be used to link to a part of a page using the anchor tag: `<a href=#goHere>stuff</a>`.

#### IDs selections
```css
#goHere {
  font-stye: italic;
  font-family: Garamond, serif;
}
```

Class attributes can be used the same way as an **ID**.
```
<p class="loud"> stuff </p>

.loud {
  background-color: yellow;
}
```
You can target tags within classes in the following way:
```
p.loud {
  background-color: grey;
}

a.loud {
  color: green;
}
```
There can be multiple classes within an attribute, separated with a space.

## `<div>` & `<span>`

**div** and **span** will be the 2 main helper tools used for layout.

`<div>` is a block level element use to divide sections of a page. Div has no appearance if it isn't styled.

`<span>` is an in-line level element. Used the same way as div in all other respects.

### Multiple Selectors

You can nest selectors:

```
selector1 selector2{
  property: value;
}
```
This will assign the property value to **selector2** only when its nested within **selector1**.

## Layout
#### CSS Box Model
Start off with any element on a page with its content. Every element can have a border, and often has padding between element and its border. With these attributes, you can target each side of the border and manage the way it is interpreted.  

- **border** around the element
- **padding** between the content nd the border (inside)
- **margin** between the border and other content (outside)

// ^^ \\\ Will be on the quiz, drawing and labeling.


Properties for borders: `h2 {border: width type color;}`
- **thickness**: specified in `px pt em`, or `thick`, `medium`, `thick`
- **style**: none, hidden, dotted, dashed, etc.
- **color**

`border-radius`: allows you to round/curve corners

#### Padding
Can use the singular tag for all sides of an element:
Can use `padding-left[bottom/top/right]`.

```
h1 {
  padding: width;
  border: width type(i.e. solid) color;
  background-color: #A4A400;
  }
```

#### Margin
Used almost the same way as padding.

When margins are stacked vertically, they are not added, but the larger of the two margins will be used.

```
p {
  margin-left: 8px;
}
```

**float** property:
a floating element is removed from normal document flow, underlying text wraps around it as necessary.
It floated out of the containing element.

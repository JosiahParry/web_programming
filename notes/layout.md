# Layout Using CSS

The **ID** attribute and **classes** will be integral. The use of IDs can be used to link to a part of a page using the anchor tag: `<a href=#goHere>stuff</a>`.

#### IDs selections
```
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

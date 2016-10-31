# Forms

HTML syntax:
```{html}
<form action="destination URL">
  form controls;
</form>```

`<form>` is a block level element. Need to have inputs as block level.

`<input name="q" /> #This name, q can be used as a query`



Input element of HTML is very versatile.

Search is good to be used as a get, so you can see the entire link, it will be shown in the URL, and can be bookmarked.

### Form controls

```{html}
<input type="text" name="q" value ="Colbert Report" />
<input type="submit" value="Booyah!" />
```
`value`: is a value that is used a default
`placeholder`: used to have filler text that diappears

Input element is used to create many UI controls. Must be an inline element that **must** be self-closed.

Types:
- button
- checkbox
- file
- hidden
- password
- radiobutton
- color
- tel
- time
- email

HTML 5 uses some basic reg ex for basic typing, these can't all be counted on all the time because some browsers don't support HTML 5. Default to txt if they don't work.

#### Text fields
  - `input` attributes: `disabled, maxlength, readonly, size, value`
  - `size` attribute controls onscreen width of text field.
  - `maxlength` limits how many characters user is able to type into a field


Dropdowns are made:
```
<select name="name">
      <option> opt. 1 </option>
</select>
```

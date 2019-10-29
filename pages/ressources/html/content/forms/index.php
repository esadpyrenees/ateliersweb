<?php

    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');

    $Parsedown = new Parsedown();

    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="html";
    $subsubsection="content";

    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/html.php");
  ?>

  <main class="pane active" id="content">



      <form>

        <div>
            <p>
                <label>
                    text
                    <br>
                    <input type="text">
                </label>
            </p>
            <p>
                <label>
                    password
                    <br>
                    <input type="password">
                </label>
            </p>
            <p>
                <label>
                    number
                    <br>
                    <input type="number">
                </label>
            </p>
            <p>
                <label>
                    email
                    <br>
                    <input type="email">
                </label>
            </p>
            <p>
                <label>
                    url
                    <br>
                    <input type="url">
                </label>
            </p>
            <p>
                <label>
                    tel
                    <br>
                    <input type="tel">
                </label>
            </p>
            <p>
                <label>
                    search
                    <br>
                    <input type="search">
                </label>
            </p>
            <p>
                <label>
                    textarea
                    <br>
                    <textarea></textarea>
                </label>
            </p>
            <p>
                <label>
                    date
                    <br>
                    <input type="date">
                </label>
            </p>
            <p>
                <label>
                    datetime
                    <br>
                    <input type="datetime">
                </label>
            </p>
            <p>
                <label>
                    datetime-local
                    <br>
                    <input type="datetime-local">
                </label>
            </p>
            <p>
                <label>
                    month
                    <br>
                    <input type="month">
                </label>
            </p>
            <p>
                <label>
                    week
                    <br>
                    <input type="week">
                </label>
            </p>
            <p>
                <label>
                    time
                    <br>
                    <input type="time">
                </label>
            </p>
            <p>
                <label>
                    select
                    <br>
                    <select>
                        <optgroup label="optgroup">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                        </optgroup>
                    </select>
                </label>
            </p>
            <p>
                <label>
                    select (multiple attr)
                    <br>
                    <select multiple>
                        <optgroup label="optgroup">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                        </optgroup>
                    </select>
                </label>
            </p>
            <p>
                <label>
                    select (size attr)
                    <br>
                    <select size="4">
                        <optgroup label="optgroup">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                        </optgroup>
                    </select>
                </label>
            </p>
            <p>
                <label>
                    datalist
                    <br>
                    <input list="datalist">
                    <datalist id="datalist">
                        <option value="option 1">
                            <option value="option 2">
                                <option value="option 3">
                    </datalist>
                </label>
            </p>
            <p>
                <label>
                    keygen
                    <br>
                    <keygen>
                </label>
            </p>
            <p>
                <label>
                    output
                    <br>
                    <output>123</output>
                </label>
            </p>
            <p>
                <label>
                    radio
                    <br>
                    <input type="radio">
                </label>
            </p>
            <p>
                <label>
                    checkbox
                    <br>
                    <input type="checkbox">
                </label>
            </p>
            <p>
                <label>
                    color
                    <br>
                    <input type="color">
                </label>
            </p>
            <p>
                <label>
                    range
                    <br>
                    <input type="range">
                </label>
            </p>
            <p>
                <label>
                    file
                    <br>
                    <input type="file">
                </label>
            </p>
            <p>
                <label>
                    submit
                    <br>
                    <input type="submit">
                </label>
            </p>
            <p>
                <label>
                    reset
                    <br>
                    <input type="reset">
                </label>
            </p>
            <p>
                <label>
                    button (input tag)
                    <br>
                    <input type="button" value="Button">
                </label>
            </p>
            <p>
                <label>
                    button (button tag)
                    <br>
                    <button>Button</button>
                </label>
            </p>

        </div>

        <fieldset>
            <legend>legend</legend>
            fieldset
        </fieldset>
    </form>

    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>

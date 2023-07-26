<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />

    <title>PyMuPDF.io</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ticker.css">
    <link rel="shortcut icon" src="favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal@2.35.2/js/jquery.terminal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal@2.35.2/js/unix_formatting.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/jquery.terminal@2.35.2/css/jquery.terminal.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NNNN72B');</script>


    <script defer data-domain="pyodide.org" src="https://plausible.io/js/plausible.js"></script>

    <!-- allows us to load the mupdf document okay -->
    <?php

      header('Access-Control-Allow-Credentials:true',true);

    ?>


  </head>


  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNNN72B"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
      <div class="panel">
        <img class="logo blink-me" src="images/logo.svg"/>
        <h1>Welcome to<br/>PyMuPDF</h1>
        <h2>Downloaded more than <strong>20 million times</strong> and consistently developed for more than eight years, <strong>PyMuPDF</strong> is the clear choice for <strong>Python</strong> developers looking to tap into powerful <strong>API</strong> functionality for <strong>PDF</strong>.</h2>
        </div>
    </header>

    <main>
      <article>


        <h3><span class="python-prompt"></span> Available via <cite>PyPi</cite></h3>

        Install easily with:
        <code class="pypi">pip install PyMuPDF</code>


      </article>


      <div class="pypi-downloads">
          <div class="title">
              <div class="prompt">DOWNLOADS ON PYPI <span style="font-size:18px;color:red;">*</span></div>
              <div id="ticker"></div>
          </div>
          <div class="ghost"></div>

      </div>


      <div style="margin-top:50px;"><span style="font-size:18px;color:red;">*</span><small> This visualization shows the 29 million benchmark from <strong>PyPi</strong> and the average download rate @ around one per 2.8 seconds! Yes, we know this isn't 100% accurate, enjoy responsibly 🙂</small></div>

      <hr>

      <article>

        <h3><span class="python-prompt"></span> Extensive documentation, version controlled with <cite>Read the Docs</cite></h3>

        Get started quickly with <a class="animate-link" href="https://pymupdf.readthedocs.io/en/latest/the-basics.html">the basics</a> or dive into <a class="animate-link" href="https://pymupdf.readthedocs.io/en/latest/classes.html">the full API</a>.

      </article>


      <hr>

      <article>

        <h3><span class="python-prompt"></span> Open Source Software (and always will be)</h3>

        Find us on <a class="animate-link" href="https://github.com/pymupdf/PyMuPDF">Github</a>, feel free to contribute!

      </article>


      <hr>

    <div id="terminal"><div class="loading"></div></div>

<!-- note the indentation on the code blocks within <pre> is deliberate & important for correct layout ! -->
      <div class="console-examples">

        <h1><span class="python-prompt large"></span> Discover the PyMuPDF online web console</h1>
        <p>Please run the samples and/or type your own <strong>Python</strong> code to learn <strong>PyMuPDF</strong>.</p>


        <h2>Print the version of PyMuPDF</h2>
        <div id="pythonScript" class="a">
        <pre>
<code>fitz.version</code>
        </pre>
          <button onClick="parseScript('a')">RUN ></button>
        </div>

        <h2>Load a document from the web</h2>
        <div id="pythonScript" class="b">
        <pre>
<code>import pyodide.http</code>
<code>r = await pyodide.http.pyfetch('https://pymupdf.io/docs/mupdf_explored.pdf')</code>
<code>data = await r.bytes()</code>
<code>doc = fitz.Document(stream=data)</code>
<code>print(f'Is PDF: {doc.is_pdf}')</code>
<code>print(f'Number of pages: {doc.page_count}')</code>
        </pre>
          <button onClick="parseScript('b')">RUN ></button>
        </div>



        <h2>Count the pages in a document</h2>
        <div id="pythonScript" class="c">
        <pre>
<code>import pyodide.http</code>
<code>r = await pyodide.http.pyfetch('https://pymupdf.io/docs/mupdf_explored.pdf')</code>
<code>data = await r.bytes()</code>
<code>doc = fitz.Document(stream=data)</code>
<code>for page in doc:</code>
<code>    print(f'Page: {page.number}')</code>
        </pre>
          <button onClick="parseScript('c')">RUN ></button>
        </div>



        <h2>Find the annotations in a document</h2>
        <div id="pythonScript" class="d">
        <pre>
<code>import pyodide.http</code>
<code>r = await pyodide.http.pyfetch('https://pymupdf.io/docs/mupdf_explored.pdf')</code>
<code>data = await r.bytes()</code>
<code>doc = fitz.Document(stream=data)</code>
<code>for page in doc:</code>
<code>    for annot in page.annots():</code>
<code>        print(f'Annotation on page: {page.number} with type: {annot.type} and rect: {annot.rect}')</code>
        </pre>
          <button onClick="parseScript('d')">RUN ></button>
        </div>


      </div><!-- end div.console -->


      <hr>

      <article>

        <h3><span class="python-prompt"></span> Licensing</h3>

        PyMuPDF is available under both, open-source AGPL and commercial license agreements.

        <p>If you determine you cannot meet the requirements of the AGPL, please <a class="animate-link" href="https://artifex.com/contact/pymupdf-inquiry.php?utm_source=pymupdf.io&utm_medium=website&utm_content=inline-link">contact Artifex</a> for more information regarding a commercial license.</p>

      </article>

      <hr>

    </main>

    <footer>


      <a href="https://artifex.com?utm_source=pymupdf.io&utm_medium=website&utm_content=footer-logo"><img class="logo" src="images/artifex-logo.svg" /></a>
    </footer>

  </body>


    <script type="text/javascript" src="js/ticker.js"></script>

    <script>
      "use strict";

      /**
       *
       */
      function sleep(s) {
        return new Promise((resolve) => setTimeout(resolve, s));
      }

      /**
       *
       */
      async function main() {
        let indexURL = "https://cdn.jsdelivr.net/pyodide/v0.23.2/full/";
        const urlParams = new URLSearchParams(window.location.search);
        const buildParam = urlParams.get("build");
        if (buildParam) {
          if (["full", "debug", "pyc"].includes(buildParam)) {
            indexURL = indexURL.replace(
              "/full/",
              "/" + urlParams.get("build") + "/",
            );
          } else {
            console.warn(
              'Invalid URL parameter: build="' +
                buildParam +
                '". Using default "full".',
            );
          }
        }

        const { loadPyodide } = await import(indexURL + "pyodide.mjs");

        let term;
        globalThis.pyodide = await loadPyodide({
          stdin: () => {
            let result = prompt();
            echo(result);
            return result;
          },
        });

        let namespace = pyodide.globals.get("dict")();
        pyodide.runPython(
          `
            import sys
            from pyodide.ffi import to_js
            from pyodide.console import PyodideConsole, repr_shorten, BANNER
            import __main__
            BANNER = "Welcome to the PyMuPDF web console.\\nType \\"fitz.version\\" to check we are ready!"
            pyconsole = PyodideConsole(__main__.__dict__)
            import builtins
            async def await_fut(fut):
              res = await fut
              if res is not None:
                builtins._ = res
              return to_js([res], depth=1)
            def clear_console():
              pyconsole.buffer = []
        `,
          { globals: namespace },
        );

        await pyodide.loadPackage("micropip");
        const micropip = pyodide.pyimport("micropip");

        await micropip.install(
          'https://ghostscript.com/~julian/pyodide/PyMuPDF-1.22.2-cp311-cp311-emscripten_3_1_32_wasm32.whl'
        )

        await pyodide.runPython(`
          import fitz
          print("fitz imported:"+str(fitz.version))
        `);

        let repr_shorten = namespace.get("repr_shorten");
        let banner = namespace.get("BANNER");
        let await_fut = namespace.get("await_fut");
        let pyconsole = namespace.get("pyconsole");
        let clear_console = namespace.get("clear_console");
        const echo = (msg, ...opts) =>
          term.echo(
            msg
              .replaceAll("]]", "&rsqb;&rsqb;")
              .replaceAll("[[", "&lsqb;&lsqb;"),
            ...opts,
          );
        namespace.destroy();

        let ps1 = ">>> ",
          ps2 = "... ";

        async function lock() {
          let resolve;
          let ready = term.ready;
          term.ready = new Promise((res) => (resolve = res));
          await ready;
          return resolve;
        }

        async function interpreter(command) {
          let unlock = await lock();
          term.pause();
          // multiline should be split (useful when pasting)
          for (const c of command.split("\n")) {
            const escaped = c.replaceAll(/\u00a0/g, " ");
            let fut = pyconsole.push(escaped);
            term.set_prompt(fut.syntax_check === "incomplete" ? ps2 : ps1);
            switch (fut.syntax_check) {
              case "syntax-error":
                term.error(fut.formatted_error.trimEnd());
                continue;
              case "incomplete":
                continue;
              case "complete":
                break;
              default:
                throw new Error(`Unexpected type ${ty}`);
            }
            // In JavaScript, await automatically also awaits any results of
            // awaits, so if an async function returns a future, it will await
            // the inner future too. This is not what we want so we
            // temporarily put it into a list to protect it.
            let wrapped = await_fut(fut);
            // complete case, get result / error and print it.
            try {
              let [value] = await wrapped;
              if (value !== undefined) {
                echo(
                  repr_shorten.callKwargs(value, {
                    separator: "\n<long output truncated>\n",
                  }),
                );
              }
              if (value instanceof pyodide.ffi.PyProxy) {
                value.destroy();
              }
            } catch (e) {
              if (e.constructor.name === "PythonError") {
                const message = fut.formatted_error || e.message;
                term.error(message.trimEnd());
              } else {
                throw e;
              }
            } finally {
              fut.destroy();
              wrapped.destroy();
            }
          }
          term.resume();
          await sleep(10);
          unlock();
        }

        term = $("#terminal").terminal(interpreter, {
          greetings: banner,
          prompt: ps1,
          completionEscape: false,
          completion: function (command, callback) {
            callback(pyconsole.complete(command).toJs()[0]);
          },
          keymap: {
            "CTRL+C": async function (event, original) {
              clear_console();
              term.enter();
              echo("KeyboardInterrupt");
              term.set_command("");
              term.set_prompt(ps1);
            },
            TAB: (event, original) => {
              const command = term.before_cursor();
              // Disable completion for whitespaces.
              if (command.trim() === "") {
                term.insert("\t");
                return false;
              }
              return original(event);
            },
          },
        });

        window.term = term;

        pyconsole.stdout_callback = (s) => echo(s, { newline: false });
        pyconsole.stderr_callback = (s) => {
          term.error(s.trimEnd());
        };
        term.ready = Promise.resolve();
        pyodide._api.on_fatal = async (e) => {
          if (e.name === "Exit") {
            term.error(e);
            term.error("Pyodide exited and can no longer be used.");
          } else {
            term.error(
              "Pyodide has suffered a fatal error. Please report this to the Pyodide maintainers.",
            );
            term.error("The cause of the fatal error was:");
            term.error(e);
            term.error("Look in the browser console for more details.");
          }
          await term.ready;
          term.pause();
          await sleep(15);
          term.pause();
        };

        const searchParams = new URLSearchParams(window.location.search);
        if (searchParams.has("noblink")) {
          $(".cmd-cursor").addClass("noblink");
        }

        $(".loading").hide();

      }

      window.console_ready = main();

      /**
       *
       */
      function parseScript(tag) {
        var commands = [];
        $('#pythonScript.'+tag+' pre').children('code').each(function(i) {
          commands.push($(this).html());
        });

        processCommands(commands);
      }


      /**
       *
       */
      function processCommands(commands) {


        var commandIndex = 0;

        setTimeout(processCommand,100);

        function processCommand() {
          window.term.exec(commands[commandIndex]);
          commandIndex++;

          if (commandIndex < commands.length) {
            setTimeout(processCommand,100);
          } else {
            window.term.enable(); // important
            setTimeout(pressEnter,1000);
          }
        }

        function pressEnter() {
          window.term.invoke_key("ENTER");
        }

      }

    </script>


</html>


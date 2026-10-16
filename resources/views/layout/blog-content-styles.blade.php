<style>
/* ==========================================================================
   Backend Coders - Blog Content Display Styles (Frontend & Admin Preview)
   Guarantees all rich editor tools, formatting, lists, tables, media,
   and Quill classes display beautifully and crisply in any browser.
   ========================================================================== */

.blog-content-body {
    color: #334155;
    font-size: 1.0625rem;
    line-height: 1.85;
    word-break: break-word;
}

/* Headings */
.blog-content-body h1,
.blog-content-body h2,
.blog-content-body h3,
.blog-content-body h4,
.blog-content-body h5,
.blog-content-body h6 {
    color: #0f172a !important;
    font-weight: 800 !important;
    letter-spacing: -0.02em;
    margin-top: 2rem;
    margin-bottom: 0.85rem;
    line-height: 1.3;
}

.blog-content-body h1 {
    font-size: 2.25rem !important;
    line-height: 1.2 !important;
}

.blog-content-body h2 {
    font-size: 1.75rem !important;
    line-height: 1.3 !important;
    padding-bottom: 0.35rem;
    border-bottom: 1px solid #f1f5f9;
}

.blog-content-body h3 {
    font-size: 1.35rem !important;
    line-height: 1.35 !important;
}

.blog-content-body h4 {
    font-size: 1.15rem !important;
    font-weight: 700 !important;
}

.blog-content-body h5 {
    font-size: 1.05rem !important;
    font-weight: 700 !important;
}

.blog-content-body h6 {
    font-size: 0.95rem !important;
    font-weight: 700 !important;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #64748b !important;
}

/* Paragraphs & Text */
.blog-content-body p {
    margin-top: 0;
    margin-bottom: 1.35rem;
    color: #334155;
    line-height: 1.85;
}

.blog-content-body strong,
.blog-content-body b {
    font-weight: 700 !important;
    color: #0f172a !important;
}

.blog-content-body em,
.blog-content-body i {
    font-style: italic !important;
}

.blog-content-body u {
    text-decoration: underline !important;
    text-underline-offset: 3px !important;
}

.blog-content-body s,
.blog-content-body strike {
    text-decoration: line-through !important;
    color: #94a3b8 !important;
}

.blog-content-body sub {
    vertical-align: sub !important;
    font-size: 0.75em !important;
}

.blog-content-body sup {
    vertical-align: super !important;
    font-size: 0.75em !important;
}

/* Unordered & Ordered Lists */
.blog-content-body ul {
    list-style-type: disc !important;
    padding-left: 1.85rem !important;
    margin: 1.15rem 0 1.5rem !important;
}

.blog-content-body ol {
    list-style-type: decimal !important;
    padding-left: 1.85rem !important;
    margin: 1.15rem 0 1.5rem !important;
}

.blog-content-body li {
    display: list-item !important;
    margin-bottom: 0.5rem !important;
    padding-left: 0.35rem !important;
    line-height: 1.75 !important;
    color: #334155 !important;
}

.blog-content-body ul ul,
.blog-content-body ol ul {
    list-style-type: circle !important;
    margin: 0.4rem 0 !important;
}

.blog-content-body ol ol,
.blog-content-body ul ol {
    list-style-type: lower-alpha !important;
    margin: 0.4rem 0 !important;
}

/* Blockquotes */
.blog-content-body blockquote {
    margin: 1.75rem 0 !important;
    padding: 1.25rem 1.75rem !important;
    border-left: 4px solid #FD5528 !important;
    background: #f8fafc !important;
    border-radius: 0 1rem 1rem 0 !important;
    font-style: italic !important;
    color: #334155 !important;
    font-size: 1.05rem !important;
    line-height: 1.8 !important;
}

.blog-content-body blockquote p:last-child {
    margin-bottom: 0 !important;
}

/* Code & Pre Blocks */
.blog-content-body code {
    background: #f1f5f9 !important;
    color: #e11d48 !important;
    padding: 0.2rem 0.45rem !important;
    border-radius: 0.375rem !important;
    font-size: 0.88em !important;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.blog-content-body pre,
.blog-content-body pre.ql-syntax {
    background: #0f172a !important;
    color: #f8fafc !important;
    padding: 1.25rem 1.5rem !important;
    border-radius: 1rem !important;
    overflow-x: auto !important;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
    font-size: 0.9rem !important;
    line-height: 1.65 !important;
    margin: 1.6rem 0 !important;
    border: 1px solid #1e293b !important;
    box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.2) !important;
}

.blog-content-body pre code {
    background: transparent !important;
    color: inherit !important;
    padding: 0 !important;
    border-radius: 0 !important;
}

/* Links */
.blog-content-body a {
    color: #FD5528 !important;
    font-weight: 600 !important;
    text-decoration: underline !important;
    text-underline-offset: 4px !important;
    text-decoration-thickness: 1.5px !important;
    transition: color 0.15s ease, text-decoration-color 0.15s ease !important;
}

.blog-content-body a:hover {
    color: #e94c20 !important;
    text-decoration-color: #e94c20 !important;
}

/* Tables */
.blog-content-body table {
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 1.75rem 0 !important;
    border: 1.5px solid #cbd5e1 !important;
    border-radius: 0.85rem !important;
    overflow: hidden !important;
    font-size: 0.95rem !important;
}

.blog-content-body th {
    background: #f8fafc !important;
    border: 1px solid #cbd5e1 !important;
    padding: 0.75rem 1rem !important;
    font-weight: 700 !important;
    text-align: left !important;
    color: #0f172a !important;
}

.blog-content-body td {
    border: 1px solid #cbd5e1 !important;
    padding: 0.75rem 1rem !important;
    color: #334155 !important;
    vertical-align: top !important;
}

.blog-content-body tr:nth-child(even) td {
    background: #fbfcfe !important;
}

.blog-content-body tr:hover td {
    background: #f1f5f9/50 !important;
}

/* Dividers (<hr>) */
.blog-content-body hr {
    border: 0 !important;
    border-top: 1.5px solid #e2e8f0 !important;
    margin: 2.25rem 0 !important;
}

/* Media: Images & Videos */
.blog-content-body img {
    max-width: 100% !important;
    height: auto !important;
    border-radius: 1rem !important;
    margin: 2rem auto !important;
    display: block !important;
    box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.1) !important;
}

.blog-content-body iframe,
.blog-content-body iframe.ql-video {
    width: 100% !important;
    aspect-ratio: 16 / 9 !important;
    max-width: 820px !important;
    border-radius: 1rem !important;
    margin: 2rem auto !important;
    display: block !important;
    border: none !important;
    box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.1) !important;
}

/* Quill Alignment Classes */
.blog-content-body .ql-align-center,
.blog-content-body p.ql-align-center {
    text-align: center !important;
}

.blog-content-body .ql-align-right,
.blog-content-body p.ql-align-right {
    text-align: right !important;
}

.blog-content-body .ql-align-justify,
.blog-content-body p.ql-align-justify {
    text-align: justify !important;
}

/* Quill Font Sizes */
.blog-content-body .ql-size-small {
    font-size: 0.825em !important;
}

.blog-content-body .ql-size-large {
    font-size: 1.35em !important;
    font-weight: 600 !important;
}

.blog-content-body .ql-size-huge {
    font-size: 1.85em !important;
    font-weight: 700 !important;
}

/* Quill Font Families */
.blog-content-body .ql-font-serif {
    font-family: Georgia, Cambria, "Times New Roman", serif !important;
}

.blog-content-body .ql-font-monospace {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

/* Quill Indents */
.blog-content-body .ql-indent-1 { padding-left: 2rem !important; }
.blog-content-body .ql-indent-2 { padding-left: 4rem !important; }
.blog-content-body .ql-indent-3 { padding-left: 6rem !important; }
.blog-content-body .ql-indent-4 { padding-left: 8rem !important; }
.blog-content-body .ql-indent-5 { padding-left: 10rem !important; }
.blog-content-body .ql-indent-6 { padding-left: 12rem !important; }
.blog-content-body .ql-indent-7 { padding-left: 14rem !important; }
.blog-content-body .ql-indent-8 { padding-left: 16rem !important; }
</style>

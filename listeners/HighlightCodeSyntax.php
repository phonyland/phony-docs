<?php

namespace App\Listeners;

use Highlight\Highlighter;
use TightenCo\Jigsaw\Jigsaw;

class HighlightCodeSyntax
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getPages())
            ->filter(function ($page) {
                return $page->_meta->extension === 'blade.php' || $page->_meta->extension === 'blade.md';;
            })
            ->each(function ($page) use ($jigsaw) {
                $path = ltrim($page->_meta->path . '/index.html', '/');
                $content = $jigsaw->readOutputFile($path);
                $formattedContent = $this->applySyntaxHighlighting($content);
                $jigsaw->writeOutputFile($path, $formattedContent);
            });
    }

    /**
     * Apply Syntax Highlighting on a string
     * Adabted from https://stefanzweifel.io/posts/server-side-syntax-highlighting-with-jigsaw/
     * Adapted from https://github.com/S1SYPHOS/kirby-highlight/blob/master/core/syntax_highlight.php
     * @param  string $value
     * @return string
     */
    private function applySyntaxHighlighting(string $value): string
    {
        // TODO: patternmatch for added classes
        // match classless code
        $pattern = "/<pre><code(?: class=[\"']language-([A-Za-z]*)[\"'])?[^>]*>(.*)(?=<\/code><\/pre>)/Uis";

        return preg_replace_callback($pattern, function ($match) {
            // $match has the following structure:
            // 0: full match; 1: programming language (group 1, if matched); 2: the code
            //
            assert(count($match) == 3);
            $input = htmlspecialchars_decode($match[2]);

            $highlighter = new Highlighter();
            $highlighter->setAutodetectLanguages([
                                                     'html',
                                                     'php',
                                                     'css',
                                                     'js',
                                                     'shell',
                                                     'tex'
                                                 ]);

            if (trim($match[1]) !== "") {
                $code = $highlighter->highlight($match[1], $input)->value;
            } else {
                $code = $highlighter->highlightAuto($input)->value;
            }

            // make sure to re-include <pre><code ...></>
            return str_replace($match[2], $code, $match[0]);
        }, $value);
    }
}
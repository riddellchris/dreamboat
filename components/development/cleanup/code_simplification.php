<?php


function get_php_files($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }
    return $files;
}

function remove_unused_variables($content) {
    
    $lines = explode("\n", $content);
    $used_vars = [];
    foreach ($lines as $line) {
        if (preg_match('/\$(\w+)/', $line, $matches)) {
            $used_vars[] = $matches[1];
        }
    }
    $used_vars = array_unique($used_vars);

    $new_lines = [];
    foreach ($lines as $line) {
        if (preg_match('/\$(\w+)/', $line, $matches)) {
            if (in_array($matches[1], $used_vars)) {
                $new_lines[] = $line;
            }
        } else {
            $new_lines[] = $line;
        }
    }
    return implode("\n", $new_lines);
}

function remove_unnecessary_comments($content) {
    
    $content = preg_replace('/\/\/.*$/m', '', $content);
    
    $content = preg_replace('/\/\*.*?\*\
    return $content;
}

function format_code($content) {
    
    $tokens = token_get_all($content);
    $formatted_code = '';
    $indent_level = 0;
    $indent_size = 4;

    foreach ($tokens as $token) {
        if (is_array($token)) {
            list($id, $text) = $token;
            switch ($id) {
                case T_OPEN_TAG:
                case T_CLOSE_TAG:
                case T_WHITESPACE:
                    $formatted_code .= $text;
                    break;
                case T_STRING:
                    $formatted_code .= $text;
                    break;
                case T_VARIABLE:
                    $formatted_code .= $text;
                    break;
                case T_FUNCTION:
                    $formatted_code .= $text;
                    break;
                case T_IF:
                case T_ELSE:
                case T_ELSEIF:
                case T_FOR:
                case T_FOREACH:
                case T_WHILE:
                case T_DO:
                case T_SWITCH:
                case T_CASE:
                case T_DEFAULT:
                case T_BREAK:
                case T_CONTINUE:
                case T_RETURN:
                    $formatted_code .= $text;
                    break;
                default:
                    $formatted_code .= $text;
                    break;
            }
        } else {
            $formatted_code .= $token;
        }
    }

    return $formatted_code;
}

function simplify_code($dir) {
    $php_files = get_php_files($dir);

    foreach ($php_files as $file) {
        $content = file_get_contents($file);
        $content = remove_unused_variables($content);
        $content = remove_unnecessary_comments($content);
        $content = format_code($content);
        file_put_contents($file, $content);
    }
}

$project_dir = '/Users/riddellchris/Sites/localhost/'; 
simplify_code($project_dir);

echo "Code simplification completed.\n";
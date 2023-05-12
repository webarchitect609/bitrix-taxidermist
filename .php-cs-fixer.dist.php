<?php

declare(strict_types=1);

use PhpCsFixerCustomFixers\Fixer\CommentedOutFunctionFixer;
use PhpCsFixerCustomFixers\Fixer\MultilinePromotedPropertiesFixer;

require __DIR__.'/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in([
        __DIR__ . '/src/main',
        __DIR__ . '/src/test',
    ]
);

return (new PhpCsFixer\Config())
            ->registerCustomFixers(new PhpCsFixerCustomFixers\Fixers())
            ->setUsingCache(true)
            ->setFinder($finder)
            ->setRiskyAllowed(true)
            ->setRules([
                'array_indentation' => true,
                'array_syntax' => ['syntax' => 'short'],
                'blank_line_after_namespace' => true,
                'blank_line_after_opening_tag' => true,
                'blank_line_before_statement' => [
                    'statements' => [
                        'continue',
                        'return',
                    ],
                ],
                'control_structure_braces' => true,
                'control_structure_continuation_position' => [
                    'position' => 'same_line',
                ],
                'curly_braces_position' => [
                    'control_structures_opening_brace' => 'same_line',
                    'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
                    'anonymous_functions_opening_brace' => 'same_line',
                    'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                    'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                    'allow_single_line_empty_anonymous_classes' => false,
                    'allow_single_line_anonymous_functions' => false,
                ],
                'cast_spaces' => true,
                'class_attributes_separation' => [
                    'elements' => [
                        'const' => 'one',
                        'method' => 'one',
                        'property' => 'one',
                        'trait_import' => 'none',
                    ],
                ],
                'class_definition' => [
                    'multi_line_extends_each_single_line' => true,
                    'single_item_single_line' => true,
                    'single_line' => true,
                ],
                'clean_namespace' => true,
                'compact_nullable_typehint' => true,
                'concat_space' => [
                    'spacing' => 'none',
                ],
                'constant_case' => ['case' => 'lower'],
                'declare_equal_normalize' => true,
                'declare_parentheses' => true,
                'elseif' => true,
                'encoding' => true,
                'full_opening_tag' => true,
                'fully_qualified_strict_types' => true,
                'function_declaration' => true,
                'function_typehint_space' => true,
                'general_phpdoc_tag_rename' => true,
                'heredoc_to_nowdoc' => true,
                'include' => true,
                'increment_style' => ['style' => 'post'],
                'indentation_type' => true,
                'integer_literal_case' => true,
                'lambda_not_used_import' => true,
                'linebreak_after_opening_tag' => true,
                'line_ending' => true,
                'list_syntax' => true,
                'lowercase_cast' => true,
                'lowercase_keywords' => true,
                'lowercase_static_reference' => true,
                'magic_method_casing' => true,
                'magic_constant_casing' => true,
                'method_argument_space' => [
                    'on_multiline' => 'ignore',
                ],
                'method_chaining_indentation' => true,
                'multiline_whitespace_before_semicolons' => [
                    'strategy' => 'no_multi_line',
                ],
                'native_function_casing' => true,
                'native_function_type_declaration_casing' => true,
                'no_alias_functions' => true,
                'no_alias_language_construct_call' => true,
                'no_alternative_syntax' => true,
                'no_binary_string' => true,
                'no_blank_lines_after_class_opening' => true,
                'no_blank_lines_after_phpdoc' => true,
                'no_closing_tag' => true,
                'no_empty_phpdoc' => true,
                'no_empty_statement' => true,
                'no_extra_blank_lines' => [
                    'tokens' => [
                        'extra',
                        'throw',
                        'use',
                    ],
                ],
                'no_leading_import_slash' => true,
                'no_leading_namespace_whitespace' => true,
                'no_mixed_echo_print' => [
                    'use' => 'echo',
                ],
                'no_multiline_whitespace_around_double_arrow' => true,
                'no_multiple_statements_per_line' => true,
                'no_short_bool_cast' => true,
                'no_singleline_whitespace_before_semicolons' => true,
                'no_spaces_after_function_name' => true,
                'no_space_around_double_colon' => true,
                'no_spaces_around_offset' => [
                    'positions' => ['inside', 'outside'],
                ],
                'no_spaces_inside_parenthesis' => true,
                'no_superfluous_phpdoc_tags' => [
                    'allow_mixed' => true,
                    'allow_unused_params' => true,
                ],
                'no_trailing_comma_in_singleline' => true,
                'no_trailing_whitespace' => true,
                'no_trailing_whitespace_in_comment' => true,
                'no_unneeded_control_parentheses' => [
                    'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
                ],
                'no_unneeded_curly_braces' => true,
                'no_unset_cast' => true,
                'no_unused_imports' => true,
                'no_unreachable_default_argument_value' => true,
                'no_useless_return' => true,
                'no_whitespace_before_comma_in_array' => true,
                'no_whitespace_in_blank_line' => true,
                'normalize_index_brace' => true,
                'not_operator_with_successor_space' => true,
                'object_operator_without_whitespace' => true,
                'ordered_imports' => ['sort_algorithm' => 'alpha'],
                'psr_autoloading' => false,
                'phpdoc_indent' => true,
                'phpdoc_inline_tag_normalizer' => true,
                'phpdoc_no_access' => true,
                'phpdoc_no_package' => true,
                'phpdoc_no_useless_inheritdoc' => true,
                'phpdoc_order' => [
                    'order' => ['param', 'return', 'throws'],
                ],
                'phpdoc_scalar' => true,
                'phpdoc_separation' => [
                    'groups' => [
                        ['deprecated', 'link', 'see', 'since'],
                        ['author', 'copyright', 'license'],
                        ['category', 'package', 'subpackage'],
                        ['property', 'property-read', 'property-write'],
                        ['param', 'return'],
                    ],
                ],
                'phpdoc_single_line_var_spacing' => true,
                'phpdoc_summary' => false,
                'phpdoc_to_comment' => false,
                'phpdoc_tag_type' => [
                    'tags' => [
                        'inheritdoc' => 'inline',
                    ],
                ],
                'phpdoc_trim' => true,
                'phpdoc_types' => true,
                'phpdoc_var_without_name' => true,
                'return_type_declaration' => ['space_before' => 'none'],
                'self_accessor' => false,
                'self_static_accessor' => true,
                'short_scalar_cast' => true,
                'simplified_null_return' => false,
                'single_blank_line_at_eof' => true,
                'single_blank_line_before_namespace' => true,
                'single_class_element_per_statement' => [
                    'elements' => ['const', 'property'],
                ],
                'single_import_per_statement' => true,
                'single_line_after_imports' => true,
                'single_line_comment_style' => [
                    'comment_types' => ['hash'],
                ],
                'single_quote' => true,
                'single_space_around_construct' => true,
                'space_after_semicolon' => true,
                'standardize_not_equals' => true,
                'statement_indentation' => true,
                'switch_case_semicolon_to_colon' => true,
                'switch_case_space' => true,
                'ternary_operator_spaces' => true,
                'trim_array_spaces' => true,
                'types_spaces' => true,
                'unary_operator_spaces' => true,
                'visibility_required' => [
                    'elements' => ['method', 'property'],
                ],
                'whitespace_after_comma_in_array' => true,

                /**
                * Custom
                */
                'declare_strict_types' => true,
                'binary_operator_spaces' => [
                    'default' => 'align_single_space_minimal',
                ],
                'trailing_comma_in_multiline' => ['elements' => ['arrays', 'parameters']],
                CommentedOutFunctionFixer::name() => true,
                MultilinePromotedPropertiesFixer::name() => true,
            ]);
<?php

$prompt = file_get_contents(__DIR__ . '/prompts/magento-review.md');

$diff = shell_exec('git diff origin/main...HEAD');

echo "=====================================\n";
echo "PROMPT\n";
echo "=====================================\n";
echo $prompt;

echo "\n\n=====================================\n";
echo "GIT DIFF\n";
echo "=====================================\n";
echo $diff;
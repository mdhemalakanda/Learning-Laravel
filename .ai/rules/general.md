---
paths:
  - '**'
---

# General

## Update the branch-by-branch README on every branch create/update
Whenever a new lesson branch is created or updated (or files are changed on one), immediately add/update its documentation: the "Learning Laravel — Branch-by-Branch Guide" README. Each branch gets a section with: concept explanation, the branch's code in highlighted code blocks, a mermaid flow diagram, a "Try It" URL table, and Laravel official doc links (https://laravel.com/docs/...). Keep the README identical across ALL branches — after editing it, copy it to every other branch (git checkout <default-branch> -- README.md), commit, and push each one. Watch for the user's uncommitted WIP files before switching branches (stash and restore if needed).

---
paths:
  - '**'
---

# General

## Update the branch-by-branch README on every branch create/update
Whenever a new lesson branch is created or updated (or files are changed on one), immediately add/update its documentation: the "Learning Laravel — Branch-by-Branch Guide" README. Each branch gets a section with: concept explanation, the branch's code in highlighted code blocks, a mermaid flow diagram, a "Try It" URL table, and Laravel official doc links (https://laravel.com/docs/...). Keep the README identical across ALL branches — after editing it, copy it to every other branch (git checkout <default-branch> -- README.md), commit, and push each one. Watch for the user's uncommitted WIP files before switching branches (stash and restore if needed).

## "Reset project" procedure — never ask again
When the user says "reset project", do exactly this without asking clarifying questions: reset the local project to a fresh Laravel installation, keeping the existing git history on the main branch (01-Service-Container-Part-01) — delete all other local branches, replace working files with a fresh Laravel install (preserve .git), and commit the fresh install as a new commit on main. NEVER push, force-push, delete remote branches, or touch the GitHub remote in any way. Unpushed local work is intentionally discarded.

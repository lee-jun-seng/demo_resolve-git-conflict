# Be Comfortable with Git Conflicts

## How to get the most from this demo?

- Most of the time, I will be using the command line to demonstrate the merge and conflicts resolution.
- It is applicable to any Git client, be it a CLI, TUI, or GUI.
- Learn the why. Not the how.

## General flow of merging and resolving conflicts

```

    ┌───────┐     ┌───────┐     No conflict     ┌────────────────────┐                  ┌─────┐
    │ Start ┼─────► Merge ┼─────────────────────► Fast forward merge ┼────────────┬─────► End │
    └───────┘     └───┬───┘                     └────────────────────┘            │     └─────┘
                      │                                                           │            
                      │                                                           │            
                      │  Conflict         ┌──────────────────┐         ┌────────┐ │            
                      └───────────────────► Resolve conflict ┼─────────► Commit ┼─┘            
                                          └──────────────────┘         └────────┘

```

## Project structure

- This project is a simple PHP composer project.
- It implements the bubble sort algorithm.
- It implements PHPUnit tests to test the bubble sort algorithm.

## Demonstration plot

- I have two feature branches:
    - Branch 1: Chore branch - `chore/comments`
        - The developer is very particular about comment. He insisted every comment should be in sentence case ended with a period.
        - The developer run `composer test` and it passed.
    - Branch 2: Fix branch - `fix/sort-order`
        - The developer needs change the sort order of the `bubbleSort` function. The developer also updated the comments (he prefers block comment).
        - The developer also updated `README.md`.
        - The developer did not run `composer test` after the changes. 😢

- For demo purpose:
    - These 2 branches will have conflicts.
    - Developer 1 is responsible to perform the merge.
    - Create another new branch `demo/resolve-conflits` from the `main` branch.
        - Merge the chore branch into the `demo/resolve-conflits` branch.
        - Merge the fix branch into the `demo/resolve-conflits` branch.
        - Developer is not aware of the incoming changes intent from the other branch and remains own changes only during conflicts resolution. 🚩
    - The developer forget to run `composer test` after the merge. 😭

## Responsible merge and conflict resolution

- You know your code, this is for sure, as you wrote it. 🫵🏻

- To not break anything when merging somebody else's code, you should:
    - Understand somebody's code before merging it. Yes, you have to. ¯\(ツ)/¯
    - **Test the code AFTER merging it**. If tests fail after merging, possibilities are:
        - The merge is not done properly and it introduced bug(s). This is your fault. ☠️
        - Somebody else's code is not working as expected. Somebody committed bug(s)! (╯°□°）╯︵ ┻━┻
        - And probably more, I may not have encountered all of them yet. GLHF. 🍀

- Merge early. Merge small. Merge often. ➡️ Less conflicts, more clarity, and nobody dies. 🥳
    - Merge early, so that you can test the code before it gets too complicated.
    - Merge small, so that you can understand the changes better.
    - Merge often, so that you can keep up with the changes.

## Bonus takeaways

- Styling guides is important.
- **A change is a change is a change**. A change always ought to be tested.
- Do not forget rebase too.
    - No rebase in this demo.
    - Merge is a good enough starting point to understand how to reconcile changes from multiple branches.

## Quizzes

### Quiz 1

```

             _______________________________
            / Resolve Git conflict is easy. \
            \ [True|False]                  /
             -------------------------------
                    \   ^__^
                     \  (oo)\_______
                        (__)\       )\/\
                            ||----w |
                            ||     ||

```

### Quiz 2

```

             _______________________________________
            / I merge. No conflicts. So, no need to \
            \ test the code. [True|False]           /
             ---------------------------------------
                    \   ^__^
                     \  (oo)\_______
                        (__)\       )\/\
                            ||----w |
                            ||     ||

```

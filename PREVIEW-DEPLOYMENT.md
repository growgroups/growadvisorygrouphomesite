# Preview deployment

The Render preview is a static staging environment for reviewing the complete website before the WordPress migration.

## Render settings

- Service type: Static Site
- Repository: `growgroups/growadvisorygrouphomesite`
- Branch: `main`
- Root directory: leave blank
- Build command: `echo "Static preview ready"`
- Publish directory: `static-site`
- Auto deploy: On commit

The `render.yaml` file contains the same repository configuration for Render Blueprint deployments.

## Scope

The preview serves the complete static reference build, including service, industry, finance, development, capital, family office, project, insight and legal pages contained under `static-site/`.

The WordPress theme remains under `wordpress-theme/` and is not used by the Render static preview.

## Production

The Render preview is not the WordPress production deployment. The existing WordPress site remains the production target until the approved migration and redirect plan is completed.

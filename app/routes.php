<?php
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/events', 'Events#events', 'events_events'],
		['GET', '/events_admin', 'Events#events_admin', 'events_events_admin'],
		['GET|POST', '/add_event', 'Events#add_event', 'events_add_event'],
		['GET|POST', '/edit_event/[:id]', 'Events#edit_event', 'events_edit_event'],
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],
		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
		['GET', '/articles/[i:id]','Blog#voirArticle','blog_id_article'],
		['GET', '/articles/[a:slug]','Blog#voirArticle','blog_slug_article'],
		['GET|POST','/admin/edit-article/[:id]','Blog#editArticle', 'Blog_EditArticle'],

		//user management
		['GET|POST','/inscription','UserManagement#inscription','userManagement_inscription'],
		['GET','/listUsers','UserManagement#listUsers','userManagement_list_users'],
		['GET','/listAdmins','UserManagement#listAdmins','userManagement_list_admins'],
		['GET|POST','/deleteUser/[:id]','UserManagement#deleteUser','userManagement_delete_user'],
		['GET|POST','/detailsUser/[:id]','UserManagement#detailsUser','userManagement_details_user'],
		['GET','/detailsUserEditForm/[:id]','UserManagement#editDetailsUserForm','userManagement_edit_user_details_form'],
		['POST','/detailsUserEdit','UserManagement#editDetailsUser','userManagement_edit_user_details'],
		['GET','/ajouterAdmin','UserManagement#addAdminForm','userManagement_add_user_admin_form'],
		['POST','/ajouterAdmin','UserManagement#addAdmin','userManagement_add_user_admin'],
		['GET','/voirSession','UserManagement#getLoggedUser','userManagement_get_logged_user'],
  		['GET|POST','/inscription','userManagement#inscription','admin_inscription'],
		['GET|POST','/connexion','userManagement#connexion','userManagement_connexion'],
		['GET|POST','/deconnexion','userManagement#deconnexion','admin_deconnexion'],
		['GET','/confirmation','userManagement#confirmation','admin_confirmation'],
   		['POST','/login','userManagement#loginUser','userManagement_login'],
		['GET','/listUsers','userManagement#listUsers','guillermo_userManagement_list'],

		//documents
		['GET|POST', '/admin/documents', 'Document#documents', 'document_documents'],
		['GET|POST', '/admin/ajout-documents', 'Document#add_documents', 'document_add_documents'],
		['GET|POST', '/admin/modif-documents/[:id]', 'Document#edit_documents', 'document_edit_documents'],
		['GET|POST', '/admin/delete-documents/[:id]', 'Document#delete_documents', 'document_delete_documents'],

    //members
		['GET', '/admin/members', 'Member#members', 'member_members'],
		['GET|POST', '/admin/addMember', 'Member#addMember', 'member_addMember'],
		['GET|POST', '/admin/edit_members/[:id]', 'Member#editMember', 'member_editMember'],
		['GET|POST', '/admin/delete-members/[:id]', 'Member#deleteMembers', 'member_deleteMembers'],
		['GET', '/usermembers', 'Member#usermembers', 'member_usermembers'],
		
    // photos
		['GET|POST', '/admin/photos', 'photo#showPhotos', 'photo_photos'],
		['GET|POST', '/admin/add-photos', 'photo#addPhotos', 'photo_add_photos'],
		['GET|POST', '/admin/edit-photos/[:id]', 'photo#editPhotos', 'photo_edit_photos'],
		['GET|POST', '/admin/delete-photos/[:id]', 'photo#deletePhotos', 'photo_delete_photos'],
		['GET|POST', '/users-photos', 'photo#userPhotos', 'photo_users_photos'],


    ['GET', '/accueil', 'Default#accueil', 'default_accueil'],
		['GET', '/documents', 'Default#documents', 'default_documents'],
		['GET', '/quisommesnous', 'Default#quisommesnous', 'default_quisommesnous'],
		['GET', '/events', 'Default#events', 'default_events'],
		['POST', '/contact2', 'Default#contact2', 'default_contact2'],
		['GET', '/testemail', 'userManagement#testEmail', 'dev_testEmail'],
	);
